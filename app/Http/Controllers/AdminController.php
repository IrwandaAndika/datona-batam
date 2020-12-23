<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admins;
use App\Admin;
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

    public function upload(Request $request)
    {
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
}
