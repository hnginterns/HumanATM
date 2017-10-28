<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | humanATM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>




<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #0F3B75;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#HumanATMNavbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="header-color" class="navbar-brand" href="#">
                <img style="width:45px;height:45px;padding:5px;" src="logo.png" alt="">
                Human ATM</a>
        </div>
        <div class="collapse navbar-collapse" id="HumanATMNavbar">
            <ul class="nav navbar-nav navbar-right" id="header-color" >
                <li><a href="#">WALLET</a></li>
                <li><a href="#">TRANSACTIONS</a></li>
                <li><a href="#">PAY BILLS</a></li>
                <li><a href="#" >INVITE FRIENDS</a></li>
            </ul>
        </div>
    </div>
</nav><!-- Navbar Ends -->

<!-- Put the body content here -->

<body>
        <div class="container-fluid red">
            <div class="row header">
                <div class="col-md-12">
                        <img src="img/head.png" class="img-responsive" alt="ladyheader">
                </div>
            </div>
            <div class="row">
                    <div class="col-xs-6 col-xs-offset-1 col-md-4 col-md-offset-1">
                        <button class="btn btn-block btn-primary header-mar"> INVITE FRIENDS</button>
                    </div>
            </div>
            <div class="row daily-margin">
                <!-- the right segment of second block starts here-->
                <div class="col-sm-5">
                    <div class="row text-center index-color">
                        <div class="col-sm-12">
                            <h1><b> Search. Locate.</b></h1>
                            <h4><b>Human ATM's Around You</b></h4>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-10 col-sm-offset-2">
                            <img src="img/side.png" class="img-responsive text-right" alt="your clique">
                        </div>
                    </div>
                </div>
        <!-- the right segment of second block ends here -->
        <!-- the left segment of second block starts here -->
                <div class="col-sm-7">
                    <img src="img/location.png" class="img-responsive text-right" alt="your location">
                </div>
                     <!-- the left segment of second block ends here -->
            </div>

            <div class="row daily-margin">
                <div class="col-sm-7">
                    <div class="index-hr">
                        <hr>  
                        <h2 class="text-center index-margin"><b>NO ATM IN YOUR ENVIRONMENT?</b><h2> <br>
                            <h3 class="index-shift text-center">No Problem, We got you covered</h3>

                        <h4 class="text-justify index-text"> Human ATM is a platform that aids you to have flexibility over <b>HOW, WHERE </b> and <b> WHEN </b>you want your money
                         also you have a choice of getting your money delivered to you at the comfort of your home.</h4>

                        <h4 class="text-justify index-text">HumanATM minimizes the hazzle of standing long queues to withdraw money or beating traffic and standing hours to
                         pay in money.</h4>

                         <h4 class="text-justify index-text"> You are clicks away to the most cozy money transaction you have ever done
                        </h4>
                            <div class="col-sm-4 header-getStated">
                                    <button class="btn btn-block btn-primary "> GET STARTED</button>
                            </div><br><br>
                        <hr> 

                    </div>
                </div>
                
                <div class="col-sm-5">
                        <img src="img/laptop.png" class="img-responsive text-right" alt="laptop">
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <img src="img/contact.png" class="img-responsive" alt="background">
                </div>
                <div class="col-sm-8 col-sm-offset-2 text-center indexContactDetails">
                    <h2><b>Contact Us</b></h2>
                    <div class="row text-center index-bottom" >
                        <div class="col-sm-4">
                            <h4><b>Contact Address</b></h4><br>
                            <h4>Head Office: <br>Plot 34, Unit 23 e-Library Estate<br> Akwa Ibom State</h4>
                            
                        </div>
                        <div class="col-sm-4">
                            <h4><b>Contact Email</b></h4><br>
                            <h4>contactus@humanatm.com</h4>
                            <h4>headoffice@humanatm.com</h4>
                            
                        </div>
                        <div class="col-sm-4">
                            <h4><b>Contact Phone</b></h4><br>
                            <h4>+234-HumanATM <small>(+234(0)8987767877)</small></h4>
                            <h4>+234(0)8035502146</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<!-- Footer -->
<?php include"homefooter.php"; ?>
<!-- End footer>
