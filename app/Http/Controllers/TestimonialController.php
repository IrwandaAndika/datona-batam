<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Testimonial;

class TestimonialController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

	public function testi()
	{
		$testimonials = Testimonial::paginate(3);
		return view('dashboard.testimonial.testimonials', compact('testimonials'));
	}

    public function add()
    {
        return view('dashboard.testimonial.testimonial-add');
    }

    public function testistore(Request $request) {

        $image = $request->image;
        $img = $image->getClientOriginalName();

        $upload = new Testimonial;
        $upload->author = $request->author;
        $upload->company = $request->company;
        $upload->description = $request->description;
        $upload->image = $img;

        $upload->save();

		return redirect('/testimonials-page')->with('massage','Data Successfully Added');
 
    }

    // method untuk edit data Testimonials
	public function edit($id)
	{
		$testimonials = Testimonial::where('id',$id)->get();
		return view('dashboard.testimonial.testimonial-edit', compact('testimonials'));
	}

	public function update(Request $request)
	{
		Testimonial::where('id', $request->id)->update([
			'author' => $request->author,
			'company' => $request->company,
			'description' => $request->description,
			'image' => $request->image
		]);
		
		return redirect('/testimonials-page');
	}

	// Delete data Testimonials
	public function delete($id)
	{
		Testimonial::where('id',$id)->delete();
		return redirect('/testimonials-page');
	}

	// Search data Testimonials
    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table testimonials sesuai pencarian data
		$testimonials = DB::table('testimonials')
		->where('author','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data testimonials ke view index
		return view('dashboard.testimonial.testimonials', compact('testimonials'));
 
	}
    
}
