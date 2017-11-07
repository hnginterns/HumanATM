<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Invite;
use App\Mail\InviteCreated;
use Illuminate\Support\Facades\Mail;
use App\Mail\User;
class InviteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user_id = Auth::id();
        return view('invite',compact('user_id'));
    }

    public function process(Request $request)
    {   $email =$request->get('email');
        $referral_id = $request->get('referral');
        // validate the incoming request data
        do {
            //generate a random string using Laravel's str_random helper
            $token = str_random();
        } //check if the token already exists and if it does, try again
        while (Invite::where('token', $token)->first());
        //create a new invite record
        $invite = Invite::create([
            'email' => $email,
            'referral_id' =>$referral_id,
            'token' => $token
        ]);
    
        // send the email
        Mail::to($email)->send(new InviteCreated($invite));
    
        // redirect back where we came from
        return redirect()->back()->with('message','Invite Successfully sent');
        dd($email);
    }
}
