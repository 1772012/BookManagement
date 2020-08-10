<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function book() {
        return view('pages.book');
    }

    public function category() {
        return view('pages.category');
    }
}
