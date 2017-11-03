@extends('layouts.app')

@section('title')
<title> Withdraw | HumanATM</title>
@endsection

@section('content')
    <section>
     @include('header')
    </section>
<body >
 <div class="container-fluid blue-fall outerBox-margin">
 
      <div class="row box-margin">
              <div class="col-md-8 col-md-offset-2 box-border">
                  <div class="row">
                      <div class="col-md-12 text-center box-color">
                          <h3>REQUEST</h3><hr>
                          <h4> Withdraw</h4>
                      </div>
                  </div>
                    @if (session()->has('status'))
                    <div class="alert alert-info alert-info fade in">
                        <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('status')}}
                    </div>
                    @endif
           
                    <div class ="profile-menu" >
                        <button type="button" class="btn btn-success "> <a href="/withdraw">WITHDRAW </a></button>
                        <button type="button" class="btn btn-success "> <a href="/payment">PAYMENT </a></button>
                            
                    </div>
           

            <div class="withdraw-info">

                <form action="/withdraw/{{$payer_id}}" class="profile-innerform " method="POST">
                 {{ csrf_field() }}
                 <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">

                   
                    <input type="text" name="phone_number" class="withdraw-data" id="" placeholder="Phone Number" value="{{old('phone_number')}}">
                    @if ($errors->has('phone_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                   
                    <input type="text" name="amount" class="withdraw-data" id="" placeholder="Amount" value="{{ old('amount')}}">
                    <p class="withdraw-label">MAX. AMOUNT  N50,000</p>
                    @if ($errors->has('amount'))
                    <span class="help-block">
                        <strong>{{ $errors->first('amount') }}</strong>
                    </span>
                    @endif
                </div>


                <div class="form-group{{ $errors->has('bank_id') ? ' has-error' : '' }}">
                    
                    <select class="withdraw-expand form-control" style="margin:0 auto" name="bank_id">
                        <option value="" selected="selected">Select Bank</option>
                        @foreach ($banks as $bank)
                        <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('bank_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bank_id') }}</strong>
                    </span>
                    @endif
                </div>



                <div class="form-group{{ $errors->has('account_number') ? ' has-error' : '' }}">
                
                    <input type="text" name="account_number" class="withdraw-data" id="" placeholder="Account Number" value="{{ old('account_number')}}">

                    <p class="withdraw-label">OLIBIE CHIDERA</p>
                    @if ($errors->has('account_number'))

                    <span class="help-block">
                        <strong>{{ $errors->first('account_number') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                
                    <input type="text" name="location" id="" class="withdraw-data" placeholder="Location" value="{{ old('location')}}">
                    @if ($errors->has('location'))
                    <span class="help-block" >
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="withdraw col-sm-6" style="font-weight:bold">
                    <p class="text-center">DELIVERY TIME</p>                                    
                    <p class="text-center">15 minutes</p>
                </div>
                <div class="tweet">   
                <input type="checkbox" name="delivery" >           
                    <p > <b>HOME-DELIVERY N150 </b> </p>
                    <input type="submit" class="btn btn-success withdraw-submit" id="withdraw-submit"value="WITHDRAW">
                   
                </div>  
            </form>
        </div>
    </div>


</div>       

</section>
<!-- Footer -->
@include('footer')
<!-- End footer-->
</body>
@endsection

