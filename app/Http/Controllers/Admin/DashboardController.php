<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {

    public function index() {
        return view('backend/dashboard');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

}
