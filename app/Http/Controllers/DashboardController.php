<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    // Actions
    public function index(){

        // $user = Auth::user();
        // dd($user);

        // Return Response : view , josn , redirect , file
        // compact ==> تقوم بارجاع الاريي
        return view('dashboard.index');
    }
}
