<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Cases;

class CasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $cases = Cases::paginate(4);
        return view('dashboard.cases.cases', compact('cases'));
    }

    public function add()
    {
        return view('dashboard.cases.cases-add');
    }

    public function store(Request $request)
    {
        $content = $request->content;
        $file = $content->getClientOriginalName();

        $upload = new Cases;
        $upload->name = $request->name;
        $upload->description = $request->description;
        $upload->type_id = $request->type_id;
        $upload->content = $file;

        $content->move(public_path(). '/img', $file);
        $upload->save();

        return redirect('/cases-page')->with('massage','Data Successfully Added');
    }

    public function edit($id)
    {
        $cases = Cases::where('id',$id)->get();
        return view('dashboard.cases.cases-edit', compact('cases'));
    }

    public function update(Request $request)
    {
        Cases::where('id',$request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'type_id' => $request->type_id,
            'content' => $request->content
        ]);

        return redirect('/cases-page');
    }

    public function delete($id)
    {
        Cases::where('id',$id)->delete();
        return redirect('/cases-page');
    }
}
