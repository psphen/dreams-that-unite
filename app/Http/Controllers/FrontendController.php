<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about-us.index');
    }
    public function alphabet()
    {
        return view('frontend.alphabet.index');
    }
    public function word()
    {
        return view('frontend.words.index');
    }
}
