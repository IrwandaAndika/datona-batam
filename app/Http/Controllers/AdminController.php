<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admins;
use App\Admin;
use App\ContactUs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('dashboard.adminpage');
    }

    public function profile()
    {
        return view('dashboard.admin-profile');
    }

    private function Validation(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'avatar' => 'mimes:png,jpg,jpeg,svg'
        ]);
    }

    public function upload(Request $request)
    {
        $this->Validation($request);

        if ($request->hasFile('avatar')) {
            $filename = $request->avatar->getClientOriginalName();
            if (auth()->user()->avatar) {
                Storage::delete('/public/img/' . auth()->user()->avatar);
            }
            $request->avatar->storeAs('img', $filename, 'public');
            auth()->user()->update([
                'avatar' => $filename,
                'name' => $request->name
            ]);
        }
        
        return redirect()->route('admin.dashboard');
    }

    public function showInbox()
    {
        $contact = ContactUs::paginate(8);
        return view('dashboard.inbox.inbox', compact('contact'));
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    	// mengambil data dari table contact_us sesuai pencarian data
		$contact = ContactUs::where('title','like',"%".$search."%")->paginate();
 
    	// mengirim data contact_us ke view index
		return view('dashboard.inbox.inbox', compact('contact'));
 
    }

    public function delete($id)
    {
        ContactUs::destroy($id);
        return redirect()->route('admin.inbox');
    }

}
