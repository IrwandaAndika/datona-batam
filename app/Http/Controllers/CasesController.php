<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    private function Validation(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'type_id' => 'required',
            'content' => 'mimes:png,jpg,jpeg,svg'
        ]);
    }

    public function store(Request $request)
    {
        $this->Validation($request);
        $cases = $request->all();
        $file = $request->content->getClientOriginalName();
        $cases['content'] = $request->file('content')->storeAs('img/cases' , $file , 'public');
        Cases::create($cases);
        return redirect('/cases-page')->with('massage','Data Created Successfully');
    }

    public function edit($id)
    {
        $cases = Cases::where('id',$id)->get();
        return view('dashboard.cases.cases-edit', compact('cases'));
    }

    public function update(Request $request, $id)
    {
        $this->Validation($request);

        $content = $request->content;
        $file = $content->getClientOriginalName();

        if ($request->file('content')) {
			$image = $request->file('content')->storeAs('img/cases' , $file , 'public');
			$cases = Cases::findOrfail($id);
            if ($cases->content) {
				Storage::delete('public/' . $cases->content);
				$cases->content = $image;
            } else {
				$cases->content = $image;
			}

			$cases->save();
		}
		
		Cases::findOrfail($id)->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
			'type_id' => $request->get('type_id')
		]);

        return redirect('/cases-page')->with('massage','Data Edited Successfully');
    }

    public function delete(Cases $cases)
    {
        $cases->delete();
        return redirect('/cases-page');
    }
}
