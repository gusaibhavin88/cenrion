<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ContentManager;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected ContentManager $contentManager;

    public function __construct(ContentManager $contentManager)
    {
        $this->contentManager = $contentManager;
    }

    /**
     * Show admin login view.
     */
    public function showLogin(Request $request)
    {
        if ($request->session()->has('admin_user')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Process admin login.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = $this->contentManager->validateAdmin($request->input('email'), $request->input('password'));

        if (!$admin) {
            return back()->withInput($request->only('email'))->with('error', 'Invalid email or password.');
        }

        $request->session()->regenerate();
        $request->session()->put('admin_user', $admin);

        return redirect()->route('admin.dashboard')->with('success', "Welcome back, {$admin['name']}!");
    }

    /**
     * Process admin logout.
     */
    public function logout(Request $request)
    {
        $request->session()->forget('admin_user');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'You have been successfully signed out.');
    }
}
