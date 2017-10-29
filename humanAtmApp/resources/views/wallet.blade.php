@extends('layouts.app')

@section('title')
<title> Wallet | HumanATM</title>
@endsection

@section('content')
<body>
    <div class="container-fluid daily-margin">
        <!-- header -->
      @include('header')
        <div class="row profile-rower">
            <div class="col-md-8 col-md-offset-2 profile-borderColor">
                <div class="row">
                    <div class="col-md-12 wallet-boxColour">
                        <b><p>Wallet Balance</p></b>
                        <h1><b>N140,000</b></h1>
                    </div>
                </div>
                <div class="row daily-margin text-center">
                    <div class="col-md-4 col-md-offset-1 daily-active">
                        <h4><a href="wallettoaccount.php"> <span style="color:white"><b> TRANSFER TO ACCOUNT</b><span></a></h4>
                        </div>
                        <div class="col-md-4 col-md-offset-2 daily-inactive">
                            <h4><a href="wallettoaccount2.php"><span style="color:#0F3B75; "><b>FUND WALLET</b><span></a></h4>
                            </div>
                        </div>
                        <div class="row daily-margin">
                            <div class="col-md-10 col-md-offset-1">

                                <form action="#" class="form" method="get">
                                    <div class="form-group ">
                                        <label for="Amount" class="walletColor">AMOUNT</label>
                                        <input type="text" class="form-control wallet-input" placeholder="dikethelmak">
                                        <p class="walletLabel-below">MAX. AMOUNT  N50,000</p>

                                        <label for="Amount" class="walletColor">ACCOUNT NUMBER</label>
                                        <input type="text" class="form-control wallet-input" placeholder="0334892134">
                                        <p class="walletLabel-below">DIKE THELMA KELECHI</p>

                                        
                                        <label for="Amount" class="walletColor">BANK</label>
                                        <input type="text" class="form-control wallet-input" placeholder="First Bank">

                                        <p class="wallet-text text-center">
                                            Transaction-Fee N55					
                                        </p>			
                                        <button type="submit" class=" wallet-button">SEND</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        @endsection