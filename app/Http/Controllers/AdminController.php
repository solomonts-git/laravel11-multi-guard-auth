<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }

    public function checklogin(Request $request)
    {
        $result = $request->all();
        //  dd($result);
        if (Auth::guard('admin')->attempt(['email' => $result['email'], 'password' => $result['password']])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'Invalid Login!');
        }
        return redirect()->route('admin.login')->with('error', 'Invalid login');
    }
    public function dashboard()
    {
        $admins = Admin::all();
        return view('admin.dashboard', compact('admins'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
