@extends('layouts.app')

@section('title')
<title> Log-in | HumanATM</title>
@endsection

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
                             
        <!--  -->
                <div class="row">
                    <div class="col-sm-12 text-center signup-formMargin">
                        <form   method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <input type="email" name="email" class="signup-data" placeholder="E-mail" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                            <span style="color:red">{{ $errors->first('email') }}</span>
                            </span>
                            @endif

                            <input type="password" name="password" id="signup-password" class="signup-data signup-password" placeholder="Password">
                           
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <span style="color:red">{{ $errors->first('password') }}</span>
                            </span>
                            @endif
                            <p ><a href="{{ route('password.request') }}" class="signup-forgot text-right">Forgot Password?</a></p>
                            <input type="submit" class="btn btn-success" id="login-submit"value="LOGIN">
                            <p class="auther-margin">
                                    Dont have an account?<br>
                                    <a href="{{ route('register') }}">
                                        Sign Up
                                    </a>
                                </p>
                            </form>
                    </div>

                </div>
                <!--  -->
                

                   

                   
          
                </div>

                </div>
</div>
@include('footer')
</body>
<script src="{{asset('js/togglepassword.js')}}"></script>

@endsection

