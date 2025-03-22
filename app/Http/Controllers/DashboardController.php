<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title = "Home";
        return view('user.dashboard.index', compact('title'));
    }

    public function menu(){
        $title = "Menu";
        return view('user.dashboard.menu', compact('title'));
    }
}
