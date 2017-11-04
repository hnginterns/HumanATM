<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bank;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $id)
    {
       $banks = Bank::all();
       $profile = Profile::where('user_id', $id);

       return view('edituser', compact('id', 'banks', 'profile'));

   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, $this->rules());  

        $create_profile = Profile::create([
            'user_id'       =>$id,
            'bank_id'       =>$request->bank_id,
            'phone_number'  =>$request->phone_number,
            'account_number'=>$request->account_number,
            'account_name'  =>$request->account_name,
            'sex'           =>$request->sex,
            'location'      =>$request->location,
        ]);

        if ($create_profile){
            return redirect()->back()->with([
                'status'=>'Profile updated successfully']);
        }
        else{
         return redirect()->back()->with([
            'failed'=>'Failed to update profile an unknown error occured']); 
     }
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

    public function rules()
    {
        return [
            'phone_number'    => 'bail|required|numeric|min:11',
            'account_number' => 'required|max:10|min:10',
            'account_name'    => 'required|string',
            'bank_id'         => 'required',
            'location'        => 'required',
            'sex'             => 'required',
        ];
    }

    public function showImageForm( $user_id)
    {
        return view('profile-image-update', compact('user_id'));
    }

    public function updateImage(Request $request, $user_id)
    {   


        $this->validate($request,[
            'photo' => 'required|image|max:200000',
        ]);
      
        \Cloudder::upload($request->file('photo'));
        $c=  \Cloudder::getResult();             
        if($c){
          $updateImage = Profile::where('user_id', $user_id)->update([
            'image_url' => $c['url'],
        ]);

      }
      if($updateImage){

        return redirect()->back()->with([
            'status' => 'Profile Image updated successfully']);
    }
    else{
        return redirect()->back()->with([
            'failed' => 'Opps! failed to update Profile Image, an unknown error occured']);
    }
}

public function getImageName()
{
    return  md5(uniqid(rand(0, 1000)))."-".date('d-m-Y-H-i-s', time()).'.jpg';
} 
}
