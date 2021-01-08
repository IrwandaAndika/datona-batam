<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Testimonial;
use App\Cases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimonials = DB::table('testimonials')->get();
        $cases = DB::table('cases')->get();
        return view('home', ['testimonials' => $testimonials], ['cases' => $cases]);
    }

    public function about()
    {
        return view('about');
    }

    public function expertise()
    {
        // mengambil data dari table pegawai
        $expertises = DB::table('expertises')->get();

        // mengirim data pegawai ke view index
        return view('expertise',['expertises' => $expertises]);
    }

    public function cases()
    {
        $cases = DB::table('cases')->get();
        return view('cases', compact('cases'));
    }

    public function testimonials()
    {
        // mengambil data dari table pegawai
        $testimonials = DB::table('testimonials')->get();

        // mengirim data pegawai ke view index
        return view('testimonials',['testimonials' => $testimonials]);
    }

    public function team()
    {
        return view('team');
    }

    public function partnerships()
    {
        return view('partnerships');
    }

    public function contact()
    {
        return view('contact');
    }

    public function storeContact(Request $request)
    {
        $contact = new ContactUs;
        $contact->title = $request->title;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        if (isset($contact)){
        return view('contact');
        } else {
        return redirect()->back();
        }
    }

    public function gallery()
    {
        // mengambil data dari table pegawai
        $galleries = DB::table('galleries')->get();

        // mengirim data pegawai ke view index
        return view('gallery',['galleries' => $galleries]);
    }

    public function hcm()
    {
        return view('expertise.hcm');
    }

    public function industrialrel()
    {
        return view('expertise.industrialrel');
    }

    public function headhunting()
    {
        return view('expertise.headhunting');
    }

}
