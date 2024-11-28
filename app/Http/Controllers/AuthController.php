<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginMethod() {
        return view('OtherLogin');
    }

    public function ShowLandingPage() {
        return view('Website.LandingPage');
    }
}
