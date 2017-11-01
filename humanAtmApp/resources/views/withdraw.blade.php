@extends('layouts.app')

@section('title')
<title> Withdraw | HumanATM</title>
@endsection

@section('content')
<body class="signup-body">
    <section>
       @include('header')
   </section>
   <section class="container">
    <div class="profile-container">
        <div class="withdraw-content">
            <div class="profile-request">
                <p>MAKE A REQUEST</p>
            </div>
            <div class="profile-supermenu">
                <div class ="profile-menu" id="">

                    <button type="button inactive"> <a href="/dashboard">PROFILE</a></button>
                    <button type="button" class="active"> <a href="/withdraw">WITHDRAW </a></button>
                    <button type="button inactive"> <a href="/payment">PAYMENT </a></button>

                </div>
            </div>

            <div class="withdraw-info">
                <form action="/withdraw/{{$withdrawer_id}}" class="profile-innerform" method="POST">
                   {{ csrf_field() }}
                   <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                    <label for="phone number">PHONE NUMBER</label>
                    <input type="text" name="phone_number" class="withdraw-data" id="" placeholder="08022343254" value="{{old('phone_number')}}">
                    @if ($errors->has('phone_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                    <label for="amount">AMOUNT</label>
                    <input type="text" name="amount" class="withdraw-data" id="" placeholder="N45000" value="{{ old('amount')}}">
                    <p class="withdraw-label">MAX. AMOUNT  N50,000</p>
                     @if ($errors->has('amount'))
                    <span class="help-block">
                        <strong>{{ $errors->first('amount') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('account_number') ? ' has-error' : '' }}">
                    <label for="acct number">ACCOUNT NUMBER</label>
                    <input type="text" name="account_number" class="withdraw-data" id="" placeholder="6160883639" value="{{ old('account_number')}}">
                    <p class="withdraw-label">OLIBIE CHIDERA</p>
                     @if ($errors->has('account_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('account_number') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                    <label for="location">LOCATION</label>
                    <input type="text" name="location" id="" class="withdraw-data" placeholder="NO 3 BARREL STRT YABA" value="{{ old('location')}}">
                     @if ($errors->has('location'))
                    <span class="help-block" >
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group" style="font-weight:bold">
                    <p>DELIVERY TIME</p>                                    
                    <p class="withdraw-data" id="">15 minutes</p>
                </div>
                <div class="">              
                    <p id='withdraw-delivery'>
                        <input type="checkbox" name="delivery" id="withdraw-span">HOME-DELIVERY
                        <span id="withdraw-span1">N150</span>
                    </p>
                    <input type="submit" class="withdraw-data withdraw-submit" id="withdraw-submit"value="WITHDRAW">
                    {{--  <input type="" class="withdraw-data withdraw-submit" id="withdraw-submit1"value="FUND WALLET"> --}}
                </div>  
            </form>
        </div>
    </div>
    
</div>       

</section>

</body>
@endsection