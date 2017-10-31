@extends('layouts.app')

    @section('title')
        <title> Payment Successful | HumanATM</title>
    @endsection

    @section('content')

        <div class="container-fluid daily-margin">
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

@endsection




