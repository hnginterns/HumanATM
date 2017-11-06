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
                        <h1><b>N140,000</b></h1>
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

                                <form action="#" class="wallet-formMargin" method="get">
                                    <div class="form-group ">
                                
                                        <input type="text" class="form-control wallet-input col-sm-6" placeholder="Amount  (Max=50,000)">
                                        <p class="walletLabel-below">Max. Amount  N50,000</p>

                                       
                                        <input type="text" class="form-control wallet-input col-sm-6" placeholder="Account Number">
                                        <p class="walletLabel-below text-right">Account Name</p>

                                        
                                        
                                        <select class="wallet-expand form-control" >
                                                <option value="" selected="selected">Select Bank</option>
                                                <option value="first Bank of Nigeria" >First Bank of Nigeria</option>
                                                <option value="union Bank of Nigeria">Union Bank of Nigeria</option>
                                                <option value="united Bank for Africa">United Bank for Africa</option>
                                                <option value="unity Bank plc">Unity Bank plc</option>
                                                <option value="fidelity Bank Nigeria">Fidelity Bank Nigeria</option>
                                                <option value="first City Monument Bank">First City Monument Bank</option>
                                                <option value="guaranty Trust_Bank">Guaranty Trust Bank</option>
                                                <option value="heritage Bank Plc">Heritage Bank plc</option>
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