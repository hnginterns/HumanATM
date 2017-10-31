@extends('layouts.app')

@section('title')
<title> Human ATM Profile | HumanATM</title>
@endsection

@section('content')

<body class="signup-body">
    
    <section class="container">
        
        <!-- header -->
        @include('header')
        <div class="profile-container">
            <div class="profile-content">
                <div class="profile-request">
                    <p>MAKE A REQUEST</p>
                </div>
                <div class="profile-supermenu">
                    <div class ="profile-menu" id="">

                        <button type="button" class="active"><a href="/dashboard">PROFILE</a></button>
                    </div>
                    <div class = "profile-menu" id="profile-menu1">
                        <button type="button" class="inactive"><a href="/withdraw/humanAtm/{{$human_atm_profile->id}}">WITHDRAW</a></button>
                        <button type="button" class="inactive"><a href="/payment">PAYMENT</a></button>

                    </div>
                </div>
                <div class="profile-image" >
                    <img src="{{$human_atm_profile->user->profile->image_url}}" alt="" width="140px" height="140px" class="img-circle">
                </div>
                <div class="profile-info">
                    <div class="profile-data">
                        <p>{{$human_atm_profile->user->name}}</p>
                        <p class="profile-2">{{$human_atm_profile->user->profile->phone_number}}</p>
                    </div>
                    <div class="profile-data">
                        <p>LOCATION</p>
                        <p class="profile-2">{{$human_atm_profile->location}}</p>
                    </div>           
                </div>
            </div>

        </div>       
        
    </section>
    
</body>
@endsection