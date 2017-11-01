@extends('layouts.app')

    @section('title')
    <title> Daily Transaction | HumanATM</title>
    @endsection

    @section('content')
        <div class="container-fluid daily-margin">
        @include('header')
        <div class="row profile-rower">
                <div class="col-md-8 col-md-offset-2 profile-borderColor">
                    <div class="row">
                        <div class="col-md-12 text-right profile-boxColour">
                            <h4>Transactions</h4>
                        </div>
                    </div>
                    <div class="row paybills-margin2">
                        <div class="col-md-2 col-md-offset-2 text-center daily-active">
                            <h4><a href="dailytransaction"><span style="color:white;"><strong>Today</strong></span></a></h4>
                                
                        </div>
                        <div class="col-md-2 col-md-offset-1 text-center daily-inactive">
                            <h4><a href="weeklytransaction"><span style="color:#0F3B75;"><strong>Week</strong></span></a></h4>
                                
                        </div>
                        <div class="col-md-2 col-md-offset-1 text-center daily-inactive">
                            <h4><a href="monthlytransaction"><span style="color:#0F3B75;"><strong>Month</strong></span></a></h4>
                                
                        </div>
                        
                    </div>
                    
                    <div class="row paybills-margin2">
                        <div class="col-md-10 col-md-offset-1 daily-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <h4><strong>Paid</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 daily-margin">
                                    <h3><strong>N30,000</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right daily-margin">
                                    <p><strong>Wallet ID: chykeofficial</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 daily-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <h4><strong>Paid</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 daily-margin">
                                    <h3><strong>N30,000</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right daily-margin">
                                    <p><strong>Wallet ID: chykeofficial</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 daily-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <h4><strong>Paid</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 daily-margin">
                                    <h3><strong>N30,000</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right daily-margin">
                                    <p><strong>Wallet ID: chykeofficial</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 daily-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <h4><strong>Paid</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 daily-margin">
                                    <h3><strong>N30,000</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right daily-margin">
                                    <p><strong>Wallet ID: chykeofficial</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>


    @endsection
    
    