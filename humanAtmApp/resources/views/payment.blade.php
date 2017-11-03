@extends('layouts.app')

@section('title')
<title>Payment | HumanATM</title>
@endsection

@section('content')

<body>
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

                <div class ="profile-menu">
                    <button type="button" class="inactive"><a href="/dashboard">PROFILE<a></button>
                        <button type="button" class="inactive"><a href="/withdraw">WITHDRAW<a></button>
                            <button type="button" class="active"><a href="/payment">PAYMENT</a></button>


                        </div>
                    </div>
                    @if (session()->has('status'))
                    <div class="alert alert-info alert-info fade in">
                        <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('status')}}
                    </div>
                    @endif

                    <div class="withdraw-info">
                        <form action="/payment" method="POST" class="profile-innerform">
                          {{ csrf_field()}}
                          <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number">PHONE NUMBER</label>
                            <input type="text" name="phone_number" class="withdraw-data" id="" placeholder="08022343254" value="{{ old('phone_number')}}">
                            @if($errors->has('phone_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_number')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount">AMOUNT</label>
                            <input type="text" name="amount" class="withdraw-data" value="{{ old('amount')}}" placeholder="45000">
                            <p class="withdraw-label">MAX. AMOUNT  N50,000</p>
                            @if($errors->has('amount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('amount')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('account_number') ? ' has-error' : '' }}">
                            <label for="acct_number">ACCOUNT NUMBER</label>
                            <input type="text" name="account_number" class="withdraw-data" id="acct_number" value="{{ old('account_number')}}" placeholder="6160883639">
                            <p class="withdraw-label"></p>
                            @if($errors->has('account_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('account_number')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('bank_name') ? ' has-error' : '' }}">
                            <label for="location">BANK</label>
                            <select class="withdraw-expand" name="bank_name">
                                <option value="" selected="selected">Select Your Bank</option>
                                <option value="First Bank of Nigeria" >First Bank of Nigeria</option>
                                <option value="Union Bank of Nigeria">Union Bank of Nigeria</option>
                                <option value="United Bank for Africa">United Bank for Africa</option>
                                <option value="Unity Bank plc">Unity Bank plc</option>
                                <option value="fidelity Bank Nigeria">Fidelity Bank Nigeria</option>
                                <option value="First City Monument Bank">First City Monument Bank</option>
                                <option value="Guaranty Trust_Bank">Guaranty Trust Bank</option>
                                <option value="Heritage Bank Plc">Heritage Bank plc</option>
                            </select>
                            @if($errors->has('bank_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bank_name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location">LOCATION</label>
                            <input type="text" name="location" id="" class="withdraw-data" placeholder="9 Etuk Obong Crescent, Tropicana, Uyo" value="{{ old('location')}}">
                            <small><i>Please ensure you include your location landmark to enable us reach you better</i></small>
                            @if ($errors->has('location'))
                            <span class="help-block" >
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="">              
                            <p id='payment-delivery'>
                                <span>Transaction-fee</span>
                                <span id="payment-span1">N55</span>
                            </p>
                            <input type="submit" class="withdraw-data withdraw-submit" id="payment-submit"value="SEND">
                            {{-- <input type="submit" class="withdraw-data withdraw-submit" id="withdraw-submit1"value="FUND WALLET"> --}}
                        </div>  
                    </form>
                </div>
            </div>

        </div>       

    </section>
    @endsection