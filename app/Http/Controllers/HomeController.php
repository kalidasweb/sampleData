<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // $customer =  new \App\Customer();
        // $customer->name = 'kalidass';
        // $customer->location = "chennai";
        // $customer->save();

        print_r(\App\Customer::all());
        print_r(\App\User::where('id','=',1)->with('customer')->get());
        return view('home');
    }
}
