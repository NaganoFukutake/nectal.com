<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request) {
        if (!isset($_COOKIE['admin-welcome'])) {
            $_COOKIE['admin-welcome'] = false;
        }
        return view('admin.home.index');
    }
}
