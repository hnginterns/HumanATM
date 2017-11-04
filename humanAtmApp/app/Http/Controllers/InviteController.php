<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InviteController extends Controller
{
    //
    public function sendinvite (Request $request){
        if($request->referralcode==''){
            $error = "Empty referralcode";
            return back()->with('error', 'error');
        }
    }
}
