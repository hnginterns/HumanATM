@extends('layouts.app')

    @section('title')
        <title> Wallet | HumanATM</title>
    @endsection

    @section('content')
            <div class="container-fluid daily-margin">
                <div class="row profile-rower">
                        <div class="col-md-8 col-md-offset-2 profile-borderColor">
                            <div class="row">
                                <div class="col-md-12 wallet-boxColour">
                                    <b><p>Wallet Balance</p></b>
                                    <h1><b>N140,000</b></h1>
                                </div>
                            </div>
                            
                        <div class="row daily-margin text-center">
                            <div class="col-md-4 col-md-offset-1 daily-inactive">
                                <h4><a href="wallet"> <span style="color:#0F3B75"><b> TRANSFER TO ACCOUNT</b><span></a></h4>
                            </div>
                            <div class="col-md-4 col-md-offset-2 daily-active">
                                <h4><a href="fundwallet"><span style="color:white "><b>FUND WALLET</b><span></a></h4>
                            </div>
                        </div><br>
                        <div class="row text-center daily-margin">
                                <div class="col-md-12">
                                    <img src="img/4.png" alt="">
                                </div>
                            </div>
                        <div class="row daily-margin">
                            <div class="col-md-10 col-md-offset-1">
                                    @if (Session::has('status'))
                                        <div class="alert-default">{{Session::get('status')}}</div>
                                    
                                    @endif
                                    <form action="{{ action('WalletsController@cardToWallet') }}" class="form" method="post">
                                        {{csrf_field()}}
                                            <div class="form-group ">
                                                 <label for="Amount" class="walletColor">Firstname</label>
                                        <input type="text" class="form-control wallet-input" placeholder="dikethelmak" name="fname">
                                        <p class="walletLabel-below">MAX. AMOUNT  N50,000</p>

                                        <label for="Amount" class="walletColor">Last Name</label>
                                        <input type="text" class="form-control wallet-input" placeholder="" name="lname">
                                        <p class="walletLabel-below">DIKE THELMA KELECHI</p>

                                        <label for="Amount" class="walletColor">Email</label>
                                        <input type="text" class="form-control wallet-input" placeholder="First Bank" name="email">
                                        <br>

                                        <label for="Amount" class="walletColor">Phone Number</label>
                                        <input type="text" class="form-control wallet-input" placeholder="First Bank" name="phone">
                                        <br>

                                        <label for="Amount" class="walletColor">Card No</label>
                                        <input type="text" class="form-control wallet-input" placeholder="First Bank" name="card_no">
                                        <br>

                                        <label for="Amount" class="walletColor">CVV</label>
                                        <input type="text" class="form-control wallet-input" placeholder="First Bank" name="cvv">
                                        <br>

                                        <label for="Amount" class="walletColor">Amount</label>
                                        <input type="text" class="form-control wallet-input" placeholder="First Bank" name="amount">
                                        <br>

                                        <p class="wallet-text text-center">
                                            Transaction-Fee N55					
                                        </p>
                                           			<br><br>
                                                <button type="submit" class=" wallet-button">PAY N301,000</button>
                                            </div>
                                        </form>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
@endsection