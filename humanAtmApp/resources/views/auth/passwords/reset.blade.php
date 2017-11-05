 @extends('layouts.app')

 @section('title')
 <title> Password Reset | HumanATM</title>


 @section('content')
 <section>
 @include('header')
</section>
<body>




<div class="container-fluid blue-fall ">
   
    <div class = "row auth-margin">
        
     <div class="col-sm-4 col-sm-offset-4 text-center authbox">

            <!--  -->
            <div class="row">
                <div class="col-sm-12 text-center">
                        <img src="{{asset('images/logo.png')}}" class="bills-image" alt="userPicture">
                        <h1 class="auth-head">HUMAN ATM</h1>
                        <p class="auth-color">FOR THE NEXT BILLION USERS</p>
                </div>
            </div>
            <!--  -->
                       



        <div class='row'>
            <form  method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <input type="email" name="email" class="signup-data"  placeholder="Email" value="{{ $email or old('email') }}">
                
                @if ($errors->has('email'))
                <span class="help-block">
                <span style="color:red">{{ $errors->first('email') }}</span>
                </span>
                @endif

                <input type="password" name="password" class="signup-data" placeholder="Enter a new password">

                <input type="password" name="password_confirmation" class="signup-data" placeholder="Confirm password">
                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                <span style="color:red">{{ $errors->first('password_confirmation') }}</span>
                </span>
                @endif
                <input type="submit" class="btn btn-success" id="newpassword-submit" value="SAVE">
            </form>
        </div>               
        
    </div>
</div>
</div>
<script src="{{asset('(js/togglepassword.js')}}"></script>
@include('footer')
</body>
@endsection

