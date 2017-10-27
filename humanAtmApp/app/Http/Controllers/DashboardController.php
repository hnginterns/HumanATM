<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class DashboardController extends Controller
{
    public function index(){

       $user = User::find(Auth::id());

       return view('userpage', compact('user'));

    }
}
