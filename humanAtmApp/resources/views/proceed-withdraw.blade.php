@extends('layouts.app')

@section('title')
<title> Confirm proceed | HumanATM</title>
@endsection

@section('content')
@include('header')
<body>

<div class="container-fluid blue-fall outerBox-margin">
   
    <div class="row box-margin">
       <div class="col-md-8 col-md-offset-2 box-border">
          <div class="row">
            <div class="col-md-12 text-center proceed-margin" style="margin-bottom: 50px;">
                <img src="{{asset('images/5.png')}}" alt="success logo" width="100px" height="150px">
            </div>
        </div>
        @if (session()->has('status'))
        <div class="alert alert-info alert-info fade in">
            <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status')}}
        </div>
        @endif
        <h4 class="text-center proceed-text"> By clicking <strong>PROCEED</strong> below, <br>You confirm that you want to withdraw <br>the sum of <strong>NGN{{$human_atm->amount}}</strong>  from <strong>{{$human_atm->user->name}}</strong>, <br>at a service charge of <strong>NGN{{$human_atm->surcharge}}</strong> and hence a total of <strong>NGN{{(int)$human_atm->amount + (int) $human_atm->surcharge}}</strong><br> will be deducted from your wallet</h4>
        <div class="col-md-8 col-md-offset-5 ">
            <a href="/process/withdraw/{{$human_atm_id}}" class="btn btn-success proceed-text2"><h4>Proceed</h4></a>
        </div>

    </div>

</div>


</div>
    
</body>
@include('footer')
@endsection




