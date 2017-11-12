@extends('layouts.app')

@section('title')
<title> Wallet | HumanATM</title>
@endsection

@section('content')
  <!-- header -->
  @include('header')
<body>
    <div class="container-fluid blue-fall outerBox-margin">
      
        <div class="row box-margin">
            <div class="col-sm-8 col-sm-offset-2 box-border">
                <div class="row">
                    <div class="col-sm-12 text-center wallet-boxColour">
                        <h4>Wallet Balance</h4> <hr>
                        <h1><b>NGN {{$balance}}</b></h1>
                    </div>
                </div>
                <div class="row daily-margin text-center">
                        <div class="col-sm-4 col-sm-offset-1 wallet-menu">
                                <a class="btn btn-success" href="/wallet"><h4>Transfer To Account</h4></a>
                            </div>
 
                         <div class="col-sm-4 col-sm-offset-1 wallet-menu">
                            <a class="btn btn-success" href="/fundwallet"><h4 class="text-right">Fund Wallet</h4></a>
                        </div>
                       
                        <div class="row daily-margin">
                            <div class="col-md-10 col-md-offset-1">
                                @if (Session::has('status'))
                                    <h4 class="alert alert-danger">{{Session::get('status')}}</h4>
                                
                                @endif

                                <form action="fundaccount" class="wallet-formMargin" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group ">
                                
                                        <input type="text" class="form-control wallet-input col-sm-6" placeholder="Amount  (Max=50,000)">
                                        <p class="walletLabel-below">Max. Amount  N50,000</p>

                                       
                                        <input type="text" class="form-control wallet-input  col-sm-3" placeholder="Account Number">
                                        <p class="walletLabel-below text-right">Account Name</p>

                                        
                                        
                                        <select class="wallet-expand form-control" name="bank_code">
                                                <option value="" selected="selected">Select Bank</option>
                                                @foreach($banks as $bank_id=>$bank_name)
                                                    <option value="{{$bank_id}}" >{{$bank_name}}</option>
                                                @endforeach
                                    </select>
                                    
                                    <p class="text-center wallet-text">
                                            Transaction Fee  = N55					
                                        </p>
                                  
                                        			
                                        <button type="submit" class=" btn btn-success wallet-button">SEND</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
 @include('footer')
<!-- End footer-->
        </body>
        @endsection