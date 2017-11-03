@extends('layouts.app')

@section('title')
<title> Human ATM Profile | HumanATM</title>
@endsection

@section('content')
 <!-- header -->
 @include('header')
<body>
<div class="container-fluid blue-fall outerBox-margin">

     <div class="row box-margin">
             <div class="col-md-8 col-md-offset-2 box-border">
                 <div class="row">
                     <div class="col-md-12 text-center box-color">
                         <h3>MAKE A REQUEST</h3><hr>
                         <h4> View Profile</h4>
                     </div>
                 </div>


                <!-- <div class="">
                    <div class ="profile-menu" id="">

                        <button type="button" class="active"><a href="/">PROFILE</a></button>
                    </div>
                    <div class = "profile-menu" id="profile-menu1">
                        <button type="button" class="box-inactive"><a href="/withdraw/humanAtm/{{$human_atm_profile->id}}">WITHDRAW</a></button>
                        <button type="button" class="box-inactive"><a href="/payment">PAYMENT</a></button>

                    </div>
                </div>

                <div class="row human-padding">
                        <div class="col-md-3 col-md-offset-1 text-center ">
                        <a href="/"><h4 class="box-active">PROFILE</h4></a>
                                
                        </div>
                        <div class="col-md-3 col-md-offset-0 text-center">
                        <a href="weeklytransaction"><h4 class="box-inactive">WITHDRAW</h4></a>
                                
                        </div>
                        <div class="col-md-3 col-md-offset-0 text-center">
                            <a href="monthlytransaction"><h4 class="box-active">PAYMENT</h4></a>                                
                        </div> 
                        
                    </div> -->

                    <!--  -->
                <div class="col-sm-offset-4" >
                    <img src="{{is_null($human_atm_profile->user->profile)? '' : $human_atm_profile->user->profile->image_url }}" alt="" width="140px" height="140px" class="img-circle profile-image ">
                </div>
                <div class="profile-info">
                    <div class="profile-data">
                        <p>{{ is_null($human_atm_profile->user->name) ? '': $human_atm_profile->user->name }}</p>
                        <p class="profile-2">{{ is_null($human_atm_profile->user->profile) ? '' : $human_atm_profile->user->profile->phone_number }}</p>
                    </div>
                    <div class="profile-data">
                        <p>LOCATION</p>
                        <p class="profile-2">{{$human_atm_profile->location}}</p>
                    </div>           
                </div>
            </div>

        </div>       
        
</div>
    
</body>
@endsection