<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPageController extends Controller
{
    public function page()
    {
        return view('dashboard.adminpage');
    }
    
    public function testi()
    {
        $testimonials = DB::table('testimonials')->get();
        return view('dashboard.testimonials',['testimonials' => $testimonials]);
    }

    public function testistore(Request $request) {
	
		DB::table('testimonials')->insert([
			'author' => $request->author,
			'company' => $request->company,
			'description' => $request->description,
            'image' => $request->image
		]);
		return redirect('/testimonials-page');
 
    }

    // method untuk edit data pegawai
	public function edit($id) {
	
		// mengambil data pegawai berdasarkan id yang dipilih
		$testimonials = DB::table('testimonials')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('dashboard.testimonials',['testimonials' => $testimonials]);
	
	}

	// update data pegawai
	public function update(Request $request) {
	
		// update data pegawai
		DB::table('testimonials')->where('id',$request->id)->update([
			'author' => $request->author,
			'company' => $request->company,
			'description' => $request->description,
			'image' => $request->image
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/testimonials-page');
	}

    public function delete($id) {
	
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('testimonials')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('/testimonials-page');
	}
    
}
