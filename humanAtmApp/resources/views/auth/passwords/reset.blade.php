 @extends('layouts.app')

 @section('title')
 <title> Password Reset | HumanATM</title>


 @section('content')

 <body class="signup-body">
    <section>
     @include('header')
 </section>
 <section id='' class='forgotpassword-container'>
    <div class = "container signup-content">
        <div class="signup-header">
            <div class="">
             

            </div>
            <div class="signup-h1">
                <p id='signup-head'>HumanATM</p>
                <p id='signup-p'>FOR THE NEXT BILLION USERS</p>
            </div>                
        </div>
        <div class='forgotpassword-form'>
            <form class="forgotpassword-innerform" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <input type="email" name="email" class="signup-data"id="" placeholder="email" value="{{ $email or old('email') }}">

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <input type="password" name="password" id="" class="newpassword-data signup-password" placeholder="Enter a new password">

                <p class='signup-eye' id="newpassword-eye"><i class="glyphicon glyphicon-eye-close"></i></p>
                <input type="password" name="password_confirmation" id="" class= "newpassword-data signup-password" placeholder="Confirm password">
                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
                <input type="submit" class="newpassword-data" id="newpassword-submit" value="SAVE">
            </form>
        </div>               
        
    </div>
</section>

<script src="{{asset('(js/togglepassword.js')}}"></script>

</body>
@endsection

