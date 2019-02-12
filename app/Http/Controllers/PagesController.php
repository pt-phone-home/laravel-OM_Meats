<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('careers');
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
        return view('offers');
    }
    public function recipes() {
        return view('recipes');
    }
    public function news() {
        return view('news');
    }
}
