@extends('layouts.app')

@section('title')
<title>Payment | HumanATM</title>
@endsection

@section('content')

@include('header')
<body>

 <section class="container-fluid blue-fall outerBox-margin">
 <div class="row box-margin">
 <div class="col-md-8 col-md-offset-2 box-border">
     <div class="row">
         <div class="col-md-12 text-center box-color">
             <h3>REQUEST</h3><hr>
             <h4> Pay-in</h4>
         </div>
     </div>


           
             <div class ="profile-menu" >
                    <button type="button" class="btn btn-success "> <a href="/withdraw">WITHDRAW </a></button>
                    <button type="button" class="btn btn-success "> <a href="/payment">PAYMENT </a></button>
         
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
                          
                            <input type="text" name="phone_number" class="withdraw-data" id="" placeholder="Phone Number" value="{{ old('phone_number')}}">
                            @if($errors->has('phone_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_number')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                           
                            <input type="text" name="amount" class="withdraw-data" value="{{ old('amount')}}" placeholder="Amount">
                            <p class="withdraw-label">MAX. AMOUNT  N50,000</p>
                            @if($errors->has('amount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('amount')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('account_number') ? ' has-error' : '' }}">
                        
                            <input type="text" name="account_number" class="withdraw-data" id="acct_number" value="{{ old('account_number')}}" placeholder="Account Number">
                            <p class="withdraw-label"></p>
                            @if($errors->has('account_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('account_number')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('bank_id') ? ' has-error' : '' }}">
                         
                        <select class="withdraw-expand form-control" name="bank_id">
                                <option value="" selected="selected">Select Bank</option>
                                @foreach ($banks as $bank)
                                <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('bank_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bank_id')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
               
                            <input type="text" name="location" id="" class="withdraw-data" placeholder="Location" value="{{ old('location')}}">
                            <small><i>Please ensure you include your location landmark to enable us reach you better</i></small>
                            @if ($errors->has('location'))
                            <span class="help-block" >
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="">              
                            <p id='payment-delivery'>
                                Transaction-fee N55
                            </p>
                            <input type="submit" class=" btn btn-success withdraw-data withdraw-submit" id="payment-submit"value="SEND">
                           
                        </div>  
                    </form>
                </div>
           

        </div>   
        </section>       
     @include('footer')
   
    @endsection