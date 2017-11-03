<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Withdrawal;

class UserDashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $id = Auth::id();

       $user = User::find($id);


        /**
        * Check if user has pending withdrawal request 
        */
        $pendingWithdrawal = Withdrawal::where(['withdrawer_id'=> Auth::id(),
            'status' => 'pending'])->first();

        /**
        * if user has pending withdrawal request
        * Fetch the payer details and show on the user's dashboard 
        */
        if ($pendingWithdrawal){
            $my_payer = User::findOrFail($pendingWithdrawal->payer_id)->load('profile');
        }

        /**
        * Check if user has pending payment to make request 
        */

        $pendingPayment = Withdrawal::where(['payer_id' =>Auth::id(),
            'status' => 'pending'])->first();



         /**
        * if user has pending payment to make
        * Fetch the reciever details and show on the user's dashboard 
        */
         if ($pendingPayment)
         {
            $reciever = User::findOrFail($pendingPayment->withdrawer_id)->load('profile');
         }

        return view('userpage', compact('user', 'pendingWithdrawal', 
            'my_payer' , 'pendingPayment', 'reciever'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();

       $user = User::find($id);


        /**
        * Check if user has pending withdrawal request 
        */
        $pendingWithdrawal = Withdrawal::where(['withdrawer_id'=> Auth::id(),
            'status' => 'pending'])->first();

        /**
        * if user has pending withdrawal request
        * Fetch the payer details and show on the user's dashboard 
        */
        if ($pendingWithdrawal){
            $my_payer = User::findOrFail($pendingWithdrawal->payer_id)->load('profile');
        }
        /**
        * Check if user has pending payment to make request 
        */

        $pendingPayment = Withdrawal::where(['payer_id' =>Auth::id(),
            'status' => 'pending'])->first();

         /**
        * if user has pending payment to make
        * Fetch the reciever details and show on the user's dashboard 
        */
         if ($pendingPayment)
         {
            $reciever = User::findOrFail($pendingPayment->withdrawer_id)->load('profile');
         }

        return view('userpage', compact('user', 'pendingWithdrawal', 
            'my_payer' , 'pendingPayment', 'reciever'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
