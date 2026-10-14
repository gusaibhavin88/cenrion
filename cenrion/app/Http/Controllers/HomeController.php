<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the Cenrion home page.
     */
    public function index()
    {
        return view('pages.home');
    }
}
