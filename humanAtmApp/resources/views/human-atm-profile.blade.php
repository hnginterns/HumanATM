@extends('layouts.app')

    @section('title')
        <title> Human ATM Profile | HumanATM</title>
    @endsection

    @section('content')
</body>
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
                        <button type="button" class="active"><a href="#">PROFILE</a></button>
                    </div>
                    <div class = "profile-menu" id="profile-menu1">
                        <button type="button" class="inactive"><a href="#">WITHDRAW</a></button>
                        <button type="button" class="inactive"><a href="#">PAYMENT</a></button>
                    </div>
                </div>
                <div class="profile-image">
                    <img src="" alt="">
                </div>
                <div class="profile-info">
                    <div class="profile-data">
                        <p>JOHN JAMES</p>
                        <p class="profile-2">+234(0)8034233442</p>
                    </div>
                    <div class="profile-data">
                        <p>LOCATION</p>
                        <p class="profile-2">No 3 Barrel Street Ipsum</p>
                    </div>           
                </div>
            </div>

        </div>       
        
    </section>
    
</body>
@endsection