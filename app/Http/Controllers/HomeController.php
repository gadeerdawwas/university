<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if (Auth::user()->is_student === 0) {
        //     // return Auth::user()->is_student;
        //     return view('dashboard.user.profile');
        // } else {
        //     // return Auth::user()->is_student;

        //     return view('dashboard.profile');
        // }
        return view('auth.login');

    }
}
