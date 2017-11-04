@extends('layouts.app')

@section('title')
<title> Dashboard | HumanATM</title>
@endsection

@section('content')
@include('header')
<body>
 <div class="container-fluid blue-fall outerBox-margin">
    <div class="row box-margin">

     <div class="col-md-8 col-md-offset-2 box-border">

        <div class="row">
           <div class="col-md-12 text-center box-color">
               <h3>VIEW YOUR PROFILE</h3><hr>
               <h4> View & Update Profile</h4>
           </div>
       </div>

       <div class="row userpage-margin">
        <div class="col-md-10 col-md-offset-1 text-center">
            <a href="/profile/image/{{$user->id}}">
            <img src="{{asset('images/3.svg')}}" class="userpage-image" alt="userPicture">
        </a>
    </div>
</div>



@if (session()->has('status'))
<div class="alert alert-info alert-info fade in">
    <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ session('status')}}
</div>
@endif


<div class="row userpage-margin userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2 ">
        <h3><span style="color:#828282"> Name: </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>{{$user->name}}</b></h3>
    </div>
</div>
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Gender: </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>{{ isset($user->profile) ? $user->profile->sex : ''}}</b></h3>
    </div>

</div>
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Wallet ID: </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>{{$user->wallet_id}}</b></h3>
    </div>
</div>
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Email Address: </span></h3>
    </div>
    <div class="col-xs-4 col-md-4 col-md-offset-1">
        <h3><b>{{$user->email}}</b></h3>
    </div>
</div>
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Mobile Number </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
        <h3><b>{{ isset($user->profile) ? $user->profile->phone_number : '+000-000-000-000'}}</b></h3>
    </div>
</div>



{{-- show pending withdrawal --}}
@if ($pendingWithdrawal)
<p class="col-xs-6 col-md-3 col-md-offset-2 "><h3  style="text-align: center"><span style="color:#828282; "> PENDING WITHDRAWAL </span></h3> 
 <hr>
</p> 
<div class="row userpage-margin userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2 ">
        <h3><span style="color:#828282"> Human ATM Name: </span></h3>
    </div>
    @isset (($my_payer))
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>{{$my_payer->name}}</b></h3>
    </div>
    @endisset
</div>
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Amount </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>NGN{{(int)$pendingWithdrawal->amount}}</b></h3>
    </div>

</div>
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Human ATM Wallet ID: </span></h3>
    </div>
    @isset ($my_payer)
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>{{$my_payer->wallet_id}}</b></h3>
    </div>

</div>
@isset ($my_payer->profile)
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Human ATM Phone Number: </span></h3>
    </div>
    <div class="col-xs-4 col-md-4 col-md-offset-1">
        <h3><b>{{$my_payer->profile->phone_number}}</b></h3>
    </div>
</div>
@endisset
@endisset

<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282">Human ATM Email Address </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
        <h3><b>{{ $my_payer->email}}</b></h3>
    </div>
</div>
@if ($my_payer->profile)
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282">Human ATM Location </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
        <h3><b>{{ $my_payer->profile->location}}</b></h3>
    </div>
</div>
@endif
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282">Status</span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
        <h3><b>{{ $pendingWithdrawal->status}}</b></h3>
    </div>
</div>

<div class="col-xs-6 col-md-4 col-md-offset-4">
    <a href="/withdraw/confirm/receipt/{{$pendingWithdrawal->id}}" class="btn btn-primary"> I Have Recieved This</a>
</div>
@endif
{{-- End show pending withdrawal--}}


{{-- show pending payment --}}
@if ($pendingPayment)
<p class="col-xs-6 col-md-3 col-md-offset-2 "><h3  style="text-align: center; margin-top: 100px"><span style="color:#828282; "> PENDING PAYMENT </span></h3> 
 <hr>
</p> 
<div class="row userpage-margin userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2 ">
        <h3><span style="color:#828282"> Reciever Name: </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>{{$reciever->name}}</b></h3>
    </div>
</div>
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Amount </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>NGN{{(int)$pendingPayment->amount}}</b></h3>
    </div>

</div>
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Reciever Wallet ID: </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1">
        <h3><b>{{$reciever->wallet_id}}</b></h3>
    </div>
</div>
@if ($reciever->profile)
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282"> Reciever Phone Number: </span></h3>
    </div>
    <div class="col-xs-4 col-md-4 col-md-offset-1">
        <h3><b>{{$reciever->profile->phone_number}}</b></h3>
    </div>
</div>
@endif

<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282">Reciever Email Address </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
        <h3><b>{{ $reciever->email}}</b></h3>
    </div>
</div>
@if ($reciever->profile)
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282">Reciever Location </span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
        <h3><b>{{ $reciever->profile->location}}</b></h3>
    </div>
</div>
@endif
<div class="row userpage-mar">
    <div class="col-xs-6 col-md-3 col-md-offset-2">
        <h3><span style="color:#828282">Status</span></h3>
    </div>
    <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
        <h3><b>{{ $pendingPayment->status}}</b></h3>
    </div>
</div>

<div class="col-xs-6 col-md-4 col-md-offset-4" style="margin-bottom: 50px">
    <a href="/reject/payment/{{$pendingPayment->id}}" class="btn btn-primary"> I Can't pay this</a>
</div>
@endif
{{-- End show pending payment--}}

</div>
</div>
</div> 

@include('footer')
</body>
@endsection