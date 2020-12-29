<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UploadedFile;
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

	private function Validation(Request $request)
	{
		$validation = $request->validate([
			'author' => 'required',
			'company' => 'required',
			'description' => 'required',
			'image' => 'mimes:png,jpg,svg,jpeg'
		]);
	}
	
	public function testistore(Request $request) 
	{
		$this->Validation($request);

        $image = $request->image;
		$img = $image->getClientOriginalName();
		$testimonials = $request->file('image')->storeAs('img/testimonials' , $img , 'public');

        $upload = new Testimonial;
        $upload->author = $request->author;
        $upload->company = $request->company;
        $upload->description = $request->description;
		$upload->image = $testimonials;
		
        $upload->save();

		return redirect('/testimonials-page')->with('massage','Data Created Successfully');
 
    }

    // method untuk edit data Testimonials
	public function edit($id)
	{
		$testimonials = Testimonial::where('id',$id)->get();
		return view('dashboard.testimonial.testimonial-edit', compact('testimonials'));
	}

	public function update(Request $request, $id)
	{
		$this->Validation($request);

		$image = $request->image;
		$img = $image->getClientOriginalName();
		
		if ($request->file('image')) {
			$image = $request->file('image')->storeAs('img/testimonials' , $img , 'public');
			$testimonials = Testimonial::findOrfail($id);
            if ($testimonials->image) {
				Storage::delete('public/' . $testimonials->image);
				$testimonials->image = $image;
            } else {
				$testimonials->image = $image;
			}

			$testimonials->save();
		}
		
		Testimonial::findOrfail($id)->update([
			'author' => $request->get('author'),
			'company' => $request->get('company'),
			'description' => $request->get('description')
		]);

		return redirect('/testimonials-page')->with('massage','Data Edited Successfully');
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
