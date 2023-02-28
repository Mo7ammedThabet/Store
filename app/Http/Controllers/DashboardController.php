<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // Actions
    public function index(){

        // Return Response : view , josn , redirect , file
        // compact ==> تقوم بارجاع الاريي
        return view('dashboard.index');
    }
}
