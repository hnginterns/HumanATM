{{-- <!DOCTYPE html>
<html>
<head>
	<title>Payment Successful Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet"  href="css/main.css">

    </head> --}}
     @extends('layouts.app')

       @section('title')
        <title> Payment Successful Page | HumanATM</title>
       @endsection

       @section('content')
    <body>
        <div class="container-fluid daily-margin">
                <!-- header -->
                 @include('header') 
                    <div class="row profile-rower">
                         <div class="col-md-8 col-md-offset-2 profile-borderColor daily-margin">
                              <div class="row">
                                    <div class="col-md-12 text-center payment-margin">
                                        <img src="{{asset('images/no.png')}}" alt="success logo">
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-12 text-center payment-margin2">
                                    <h2><b>PAYMENT SUCCESSFUL</b></h2>
                                 </div>
                            </div>
                            
                        </div>
                       
                    </div>

        
        </div>

    </body>
@endsection




