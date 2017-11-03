<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    /**
     * Display the form to update a user
     */

    public function edit($id) {
        $user = User::findOrFail($id);

        return view('updateuser');
    }

    /**
     * Update a user profile
     */
    public function update(UpdateFormRequest $request) {

        $user = Auth::user();

        $user->name     = $request->input('name');
        $user->email    = $request->input('email');

        if( $request->has('passowrd')) $user->password = bcrypt($request->input('password')); 
        
        $user-save();

        return redirect('/dashboard');
    }
}
