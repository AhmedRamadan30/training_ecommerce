<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email'         => 'required|email',
            'password'      => 'required'
        ]);
        $user = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember);
        if ($user) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with(['error' => 'email or password are wrong']);
        }
    }

    public function home() {
        return view('admin.home');
    }
}
