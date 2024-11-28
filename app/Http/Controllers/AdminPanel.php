<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    public function directToLogin (Request $request) {
        return view('admin.loginAdmin');
    }
    public function directToDashboard (Request $request) {
        return view('admin.dashboardadmin');
    }
    public function directToDetailEvent (Request $request) {
        return view('admin.detailEvent');
    }
    public function directToIndexNotification (Request $request) {
        return view('admin.notification.indexNotification');
    }
    public function directToDetailNotification (Request $request) {
        return view('admin.notification.DetailNotification');
    }
}
