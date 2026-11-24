<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ContentManager;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    protected ContentManager $contentManager;

    public function __construct(ContentManager $contentManager)
    {
        $this->contentManager = $contentManager;
    }

    public function index()
    {
        $navbar = $this->contentManager->getNavbarSettings();
        return view('admin.navbar.index', compact('navbar'));
    }

    public function update(Request $request)
    {
        $navbarInput = $request->input('navbar', []);
        $this->contentManager->saveNavbarSettings($navbarInput);

        return redirect()->route('admin.navbar.index')->with('success', 'Navbar page visibility updated successfully via radio button controls.');
    }
}
