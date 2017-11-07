
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
                <img style="width:70px; height:70px;padding:10px;" src="<?php echo e(asset('images/logo.png')); ?>" alt="">
               <b> HUMAN ATM</b></a>
        </div>
        <div class="collapse navbar-collapse" id="HumanATMNavbar">
            <ul class="nav navbar-nav navbar-right" id="header-color" >
                <li><a href="/wallet">WALLET</a></li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRANSACTIONS <span class="caret"></span></a>
          <ul class="dropdown-menu" id="header-color2">
            <li><a href="/dailytransaction"><h4><b>Daily</b></h4></a></li>
            <li><a href="/weeklytransaction"><h4><b>Weekly</b></h4></a></li>
            <li><a href="/monthlytransaction"><h4><b>Monthly</b></h4></a></li>
          </ul>
        </li>
                <li><a href="/paybills">PAY BILLS</a></li>
                <li><a href="/invite" >INVITE FRIENDS</a></li>
            </ul>
        </div>
    </div>
</nav><!-- Navbar Ends -->