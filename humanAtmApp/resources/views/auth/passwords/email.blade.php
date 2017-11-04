@extends('layouts.app')

@section('title')
<title> Forgot Password| HumanATM</title>
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


            <div class="row">
            <div class="col-sm-12 text-center">
              <section>
                 @if (session('status'))
                 <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
            </section>
            <form  method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <p class="text-center"><i>All we need is your email to get you right back on track.</i></p>
                <input type="email" name="email"  class="signup-data {{ $errors->has('email') ? ' has-error' : '' }}" value="{{ old('email')}}" placeholder="Email Address">
                @if ($errors->has('email'))
                <span class="help-block">
                <span style="color:red">{{ $errors->first('email') }}</span>
                </span>
                @endif

                <input type="submit" class=" btn btn-success signup-data"  value="SEND">
            </form>
        </div>               

    </div>
</div>
</div>
</div>
</section>
@include('footer')
</body>
@endsection



