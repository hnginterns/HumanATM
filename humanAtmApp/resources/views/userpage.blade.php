@extends('layouts.app')

    @section('title')
        <title> User Profile | HumanATM</title>
    @endsection

    @section('content')

                    <div class="col-md-8 col-md-offset-2 userpage-shadow">
                        <div class="row userpage-margin">
                            <div class="col-md-7 col-md-offset-1 text-center">
                                <img src="{{asset('images/3.png')}}" class="userpage-image" alt="userPicture">
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-md-2 col-md-offset-1 text-center  daily-inactive">
                                <h5><b>Edit Profile</b></h5>
                            </div>
                        </div>

                        <div class="row userpage-margin userpage-mar">
                            <div class="col-xs-6 col-md-3 col-md-offset-2 ">
                                <h3><span style="color:#828282"> Name: </span></h3>
                            </div>
                            <div class="col-xs-6 col-md-4 col-md-offset-1">
                            </div>
                        </div>
                        <div class="row userpage-mar">
                            <div class="col-xs-6 col-md-3 col-md-offset-2">
                                <h3><span style="color:#828282"> Gender: </span></h3>
                            </div>
                            <div class="col-xs-6 col-md-4 col-md-offset-1">
                                <h3><b>Female</b></h3>
                            </div>
                        </div>
                        <div class="row userpage-mar">
                            <div class="col-xs-6 col-md-3 col-md-offset-2">
                                <h3><span style="color:#828282"> Wallet ID: </span></h3>
                            </div>
                            <div class="col-xs-6 col-md-4 col-md-offset-1">
                            </div>
                        </div>
                        <div class="row userpage-mar">
                            <div class="col-xs-6 col-md-3 col-md-offset-2">
                                <h3><span style="color:#828282"> Email Address: </span></h3>
                            </div>
                            <div class="col-xs-4 col-md-4 col-md-offset-1">
                            </div>
                        </div>
                        <div class="row userpage-mar">
                            <div class="col-xs-6 col-md-3 col-md-offset-2">
                                <h3><span style="color:#828282"> Mobile Number </span></h3>
                            </div>
                            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                                <h3><b>+234 811 234 5678</b></h3>
                            </div>
                        </div>
                        
                    </div>
            </div>
      </div> 
    </body>
@endsection