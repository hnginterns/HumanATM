{{-- <p>Hi</p>

<p>{{$user->name}} invited you to join HumanATM platform.</p>

<a href="{{url('/register/ref='. $user->referral_id)}}">Click here</a> to register

Thanks --}}


<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


<title> Email Invite | HumanATM</title>
</head>



<body>

<div class="container-fluid outerBox-margin">

 <div class="row box-margin">
    <div class="col-md-8 col-md-offset-2">
                    <div class="row text-center email-head">
                            <img src="<?php echo $message->embed('images/logo.png'); ?>" class="bills-image" alt="">
                                <h1 class="reduce"><b>HUMAN ATM</b></h1>
                    </div>
            

           
            <div class="row about">
                        <div class="col-sm-12 mx-auto">
                            <h2>Hi,</h2>
                            <p class="lead">We are glad to have you come on board, we are Human ATM and we provide money access solutions to our customers
                            irrespective of their location.
                            </p>
                            <div class="space"></div>
                            <p class="lead">You are just one click away from getting freed from all the hassles associated with withdrawing or paying in money into your account. </p>
                            <p class="lead">Kindly click on the button below to join a world of hassle free transactions. </p>
                        </div>
                        
                        
                        <div class="centered">
                        <a href="{{url('/register/ref='. $user->referral_id)}}" class="btn btn-primary"> Join Us </a> 
                    </div>
            </div>
         

            <section id="signature">
            
                <div class="row signature-right">
                <div class="col-sm-8 mx-auto">
                    <h4>Kind Regards,</h4>
                    <h4>Customer Support</h4>
                    <h4><b>HUMAN ATM</b></h4>
                </div>
            </div>
    </section>
    <div class="end">

    </div>
</div>
</div>
</div>
