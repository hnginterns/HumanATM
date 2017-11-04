@extends('layouts.app')

@section('title')
<title> Sign Up| HumanATM</title>
@endsection

@section('content')

    @include('header')

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
            <div class="col-sm-12 text-center">
                <form  class="signup-innerform" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <input type="text" name="name" value="{{ old('name') }}" class="signup-data {{ $errors->has('name') ? ' has-error' : '' }}" id="" placeholder="Full Name">
                    @if ($errors->has('name'))
                    <span class="help-block">
                    <span style="color:red">{{ $errors->first('name') }}</span>
                    </span>
                    @endif

                    <input type="text" name="wallet_id" class="signup-data {{ $errors->has('wallet_id') ? ' has-error' : '' }}" value="{{ old('wallet_id') }}" placeholder="Wallet ID">
                    @if ($errors->has('wallet_id'))
                    <span class="help-block">
                    <span style="color:red">{{ $errors->first('wallet_id') }}</span>
                    </span>
                    @endif



                    <input type="email" name="email"  class="signup-data {{ $errors->has('email') ? ' has-error' : '' }}" value="{{ old('email')}}" placeholder="Email Address">
                    @if ($errors->has('email'))
                    <span class="help-block">
                    <span style="color:red">{{ $errors->first('email') }}</span>
                    </span>
                    @endif



                    <input type="password" name="password"  class="signup-data" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="help-block">
                    <span style="color:red">{{ $errors->first('password') }}</span>
                    </span>
                    @endif


                    <p class='signup-eye'><i class="glyphicon glyphicon-eye-close"></i></p>
                    <input type="password" name="password_confirmation"  id="signup-password1" class="signup-data signup-password" placeholder="Confirm password">


                    <input type="submit" class="btn btn-success signup-data" value="CREATE ACCOUNT">
                    <p id='signup-signin'>

                    Have an account?<br>
                        <a href="{{ route('login') }}" class="" >
                        Sign In
                        </a>
                    </p>
                </form>
            </div>               
        </div>
        </div>
    </div>
    </div>
    @include('footer')   
</body>
    <script src="{{asset('js/togglepassword.js')}}">  </script> 
@endsection