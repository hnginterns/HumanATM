<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct()
    {   
    	$this->middleware('auth');
    	$this->middleware('admin');
    }

    public function index()
    {
    	return view('admin');
    }
    public function pending()
    {
    	return view('pending');
    }
     public function total()
    {
    	return view('total');
    }
     public function completed()
    {
    	return view('completed');
    }
     public function humanAtm()
    {
        return view('humanAtm');
    }
}
