<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        LaraFlash::add()->content('Hello' . " " . Auth::user()->name)->priority(6)->type('Info');
        // LaraFlash::success("Yeah it worked!");
        // LaraFlash::danger("Oops Something went wrong!");
        // LaraFlash::snackbar("Click to continue");
        return view('home');
    }
}
