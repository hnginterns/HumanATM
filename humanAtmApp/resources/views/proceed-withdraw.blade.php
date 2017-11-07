@extends('layouts.app')

@section('title')
<title> Confirm proceed | HumanATM</title>
@endsection

@section('content')

<div class="container-fluid daily-margin">
    @include('header')
    <div class="row profile-rower">
       <div class="col-md-8 col-md-offset-2 profile-borderColor daily-margin">
          <div class="row">
            <div class="col-md-12 text-center payment-margin" style="margin-bottom: 50px;">
                <img src="{{asset('images/question-mark.jpg')}}" alt="success logo">
            </div>
        </div>
        @if (session()->has('status'))
        <div class="alert alert-info alert-info fade in">
            <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status')}}
        </div>
        @endif
        <p class="text-center"> By clicking <strong>PROCEED</strong> below, You confirm that you want to withdraw the sum of <strong>NGN{{$human_atm->amount}}</strong>  from <strong>{{$human_atm->user->name}}</strong>, at a service charge of <strong>NGN{{$human_atm->surcharge}}</strong> and hence a total of <strong>NGN{{(int)$human_atm->amount + (int) $human_atm->surcharge}}</strong> will be deducted from your wallet</p>
        <div class="col-md-8 col-md-offset-5" style="margin-bottom: 50px; margin-top: 50px;">
            <a href="/process/withdraw/{{$human_atm_id}}" class="btn btn-primary">Procced</a>
        </div>

    </div>

</div>


</div>

@endsection




