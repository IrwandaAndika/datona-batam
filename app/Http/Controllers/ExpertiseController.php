<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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

    public function store(Request $request) 
    {

      $image = $request->image;
      $file = $image->getClientOriginalName();

      $upload = new Expertise;
      $upload->title = $request->title;
      $upload->content = $request->content;
      $upload->link = $request->link;
      $upload->image = $file;

      $image->move(public_path().'/img', $file);
      $upload->save();

      return redirect('/expertises-page')->with('massage','Data Successfully Added');
 
    }

    public function edit($id) 
    {
	
      // mengambil data Expertises berdasarkan id yang dipilih
      $expertises = Expertise::where('id',$id)->get();
      // passing data Expertises yang didapat ke view expertises-edit.blade.php
      return view('dashboard.expertise.expertises-edit', compact('expertises'));
	
    }
    
    public function update(Request $request) 
    {
      // update data Expertises
      Expertise::where('id',$request->id)->update([
        'title' => $request->title,
        'content' => $request->content,
        'link' => $request->link,
        'image' => $request->image->getClientOriginalName()
      ]);

      // alihkan halaman ke halaman expertises-page
      return redirect('/expertises-page');
    
    }

    public function delete($id)
    {
      Expertise::where('id',$id)->delete();

      return redirect('/expertises-page');
    }

}
