@extends('layouts.app')

    @section('title')
        <title> PayBills | HumanATM</title>
    @endsection

    @section('content')
                <div class="container-fluid daily-margin">
                        <!-- header -->
                        @include('header')
                <div class="row profile-rower">
                        <div class="col-md-8 col-md-offset-2 profile-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-right profile-boxColour">
                                    <h4>Pay Bills</h4>
                                </div>
                            </div>
                            <div class="row paybills-margin">
                                <div class="col-md-5 col-md-offset-1 text-center ">
                                    <h4><button type="button" class="btn btn-primary btn-block"> <span style="font-size:1.3em">  CABLE Tv Subscription </span></button></h4>
                                       
                                </div>
                                <div class="col-md-5 text-center">
                                        <h4> <button type="button" class="btn btn-primary btn-block "> <span style="font-size:1.3em">  Utility Bills </span></button></h4>
                                       
                                </div>
                            </div>
                            <div class="row paybills-margin2">
                                <div class="col-md-5 col-md-offset-1 text-center ">
                                    <h4><button type="button" class="btn btn-primary btn-block"> <span style="font-size:1.3em">  Data Bundle </span></button></h4>
                                       
                                </div>
                                <div class="col-md-5 text-center">
                                        <h4> <button type="button" class="btn btn-primary btn-block"> <span style="font-size:1.3em"> Mobile Recharge </span></button></h4>
                                       
                                </div>
                            </div>
                            
                        </div>
                </div>
    
            </div>
@endsection
     
        