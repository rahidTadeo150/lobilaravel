<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorizationAdmin extends Controller
{
    public function authentication(Request $request) {
        $credential = $request->validate([
            'username' => ['string', 'required', 'min:"2', 'max:100'],
            'password' => ['string', 'required', 'min:4', 'max:100'],
        ]);
        if (Auth::guard('Admin')->attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-admin');
        }
        else {
            return back()->with('authfailed', 'Tidak dapat terhubung ke akun anda');
        }
    }

    public function hasloged() {
        return view('admin.dashboardadmin');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
