<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | humanATM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>




<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #0C2A52;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#HumanATMNavbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="header-color" class="navbar-brand" href="#">
                <img style="width:45px; height:45px;padding:10px;" src="{{asset('img/logo.png')}}" alt="">
               <b> HUMAN ATM</b></a>
        </div>
        <div class="collapse navbar-collapse" id="HumanATMNavbar">
            <ul class="nav navbar-nav navbar-right" id="header-color" >
                <li><a href="/wallet">WALLET</a></li>
                <li class="dropdown">
                        <a href="dailytransaction.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRANSACTIONS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Daily</a></li>
            <li><a href="#">Weekly</a></li>
            <li><a href="#">Monthly</a></li>
          </ul>
        </li>
                <li><a href="/paybills">PAY BILLS</a></li>
                <li><a href="/invite" >INVITE FRIENDS</a></li>
            </ul>
        </div>
    </div>
</nav><!-- Navbar Ends -->

<!-- Put the body content here -->

<body>
        <div class="container-fluid red">
            <div class="row header">
                <div class="col-md-12 homepage-color">
                       <h1 class="text-center"><b>Truly Simple Transactions</b></h1>
                        <h4 class="text-center"> Human ATM Helps to Make Your Money Transactions <br>
                        Easy, Fast and Reliable at the comfort of <br> your Home or Office
                         </h4>
                         <a href="/invite" class="btn col-xs-offset-5 home-btn btn-success"> GET STARTED </a>
                        
                        </div>
            </div>
            <div class="row headSegment-margin">
                <div class="col-sm-2 col-sm-offset-1   segment-box text-center">
                    <h1><i class="fa fa-map-marker fa-2x"></i></h1>
                    <h3>Locate ATM</h3>
                    <h4>Connects with to thousands of Human ATM across the <br>Country

                </div>
                <div class="col-sm-2 col-sm-offset-1 segment-box text-center">
                    <h1><i class="fa fa-university fa-2x"></i></h1>
                    <h3>Stress Free</h3>
                     <h4>Get relieved of the stress of long queues at ATM locations and Banking Halls .<br>
                    </h4>
                </div>
                <div class="col-sm-2  col-sm-offset-1 segment-box text-center">
                    <h1><i class="fa fa-bolt fa-2x"></i></h1>
                    <h3>Fast Transactions</h3>
                    <h4>Get cash delivered to your location in less than 10mins<br>
                    </h4>
                </div>
                <div class="col-sm-2 col-sm-offset-1 segment-box text-center">
                    <h1><i class="fa fa-shield fa-2x"></i></h1>
                    <h3>Secured</h3>
                    <h4>Your Transactions are fully secured!<br> PCI Compliant <br>
                    </h4>
                </div>

            </div>
            <br> <br> <br> <br> <br> <br>
    
            

            <div class="row head-segment3">
                <div class="col-sm-12 text-center">
                 <h1> <b>NO ATM IN YOUR ENVIRONMENT?</b></h1>
                    <h3>No Problem, We got you covered!</h3>
                </div>
                <div class="col-sm-3 color-fa col-sm-offset-1 text-center">
                <h1><i class="fa fa-search fa-2x" ></i></h1>
                <h4>Search for HumanATM</h4>
                </div>
                <div class="col-sm-3 color-fa col-sm-offset-1 text-center">
                <h1><i class="fa fa-user fa-2x" ></i></h1>
                <h4>Place Withdrawal Order</h4>
                </div>
                <div class="col-sm-3 color-fa col-sm-offset-1 text-center">
                <h1><i class="fa fa-truck fa-2x" ></i></h1>
                <h4>Order Arrives your Location</h4>
                </div>
                
            </div>

            
        </div>
    </body>
<!-- Footer -->
 @include('footer')
<!-- End footer>
