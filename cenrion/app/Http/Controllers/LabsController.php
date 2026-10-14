<?php

namespace App\Http\Controllers;

class LabsController extends Controller
{
    /**
     * Display the Cenrion Labs page.
     */
    public function index()
    {
        return view('pages.labs');
    }
}
