<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Expertise;

class ExpertiseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
      $expertises = Expertise::paginate(1);
      return view('dashboard.expertise.expertises', compact('expertises'));
    }

    public function add()
    {
      return view('dashboard.expertise.expertises-add');
    }

    private function Validation(Request $request)
    {
      $validation = $request->validate([
        'title' => 'required',
        'content' => 'required',
        'link' => 'required',
        'image' => 'mimes:png,jpg,jpeg,svg'
      ]);
    }

    public function store(Request $request) 
    {
      $this->Validation($request);

      $image = $request->image;
      $file = $image->getClientOriginalName();
      $expertises = $request->file('image')->storeAs('img/expertises' , $file , 'public');

      $upload = new Expertise;
      $upload->title = $request->title;
      $upload->content = $request->content;
      $upload->link = $request->link;
      $upload->image = $expertises;

      $upload->save();

      return redirect('/expertises-page')->with('massage','Data Created Successfully');
 
    }

    public function edit($id) 
    {
	
      // mengambil data Expertises berdasarkan id yang dipilih
      $expertises = Expertise::where('id',$id)->get();
      // passing data Expertises yang didapat ke view expertises-edit.blade.php
      return view('dashboard.expertise.expertises-edit', compact('expertises'));
	
    }
    
    public function update(Request $request, $id) 
    {
      $this->Validation($request);

      $image = $request->image;
      $file = $image->getClientOriginalName();
  
      if ($request->file('image')) {
        $image = $request->file('image')->storeAs('img/expertises' , $file , 'public');
        $expertises = Expertise::findOrfail($id);
        if ($expertises->image) {
          Storage::delete('public/' . $expertises->image);
          $expertises->image = $image;
        } else {
          $expertises->image = $image;
        }
  
        $expertises->save();
      }
      
      Expertise::findOrfail($id)->update([
        'title' => $request->get('title'),
        'content' => $request->get('content'),
        'link' => $request->get('link')
      ]);
  

      // alihkan halaman ke halaman expertises-page
      return redirect('/expertises-page')->with('massage','Data Edited Successfully');
    
    }

    public function delete($id)
    {
      Expertise::where('id',$id)->delete();

      return redirect('/expertises-page');
    }

}
