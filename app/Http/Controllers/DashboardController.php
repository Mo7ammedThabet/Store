<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // Actions
    public function index(){

        // Return Response : view , josn , redirect , file
        return view('dashboard');
    }
}
