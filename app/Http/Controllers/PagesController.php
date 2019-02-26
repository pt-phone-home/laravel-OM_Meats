<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Careers;
use App\Offer;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }
    public function about() {
        return view('about');
    }
    public function quality() {
        return view('quality');
    }
    public function careers() {

        $careers = Careers::orderBy('updated_at', 'DESC')->get();

        return view('careers')->with('careers', $careers);
    }
    public function contact() {
        return view('contact');
    }
    public function wholesale() {
        return view('wholesale');
    }
    public function retail() {
        return view('retail');
    }
    public function products() {
        return view('products');
    }
    public function offers() {

        $latest_offer = Offer::OrderBy('updated_at', 'DESC')->findorfail(1);

        // dd($latest_offer);

        $offers = Offer::OrderBy('updated_at', 'DESC')->take(6)->get();

        
        return view('offers')->with([
            'latest_offer' => $latest_offer,
            'offers' => $offers
        ]);
    }
    public function recipes() {
        return view('recipes');
    }
    public function news() {
        return view('news');
    }


    // ADMIN PAGES

    public function admin() {
        return view('admin');
    }
}
