<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo $__env->yieldContent('title'); ?>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-fixed-top" style="background-color: #ffffff; color:#0F3B75">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle hamburger" data-toggle="collapse" data-target="#HumanATMNavbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar" ></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="HumanATMNavbar">
                    <ul class="nav navbar-nav navbar-right" id="header-color" >
                        <li class="active"><a href="/fundwallet">WALLET</a></li>
                        <li><a href="/dailytransaction">TRANSACTIONS</a></li>
                        <li><a href="/paybills">PAY BILLS</a></li>
                        <li><a href="/invite" >INVITE FRIENDS</a></li>
                        <li><a href="/dashboard" >USER PAGE</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- Navbar Ends -->

        <div class="margin"></div>
   <?php echo $__env->yieldContent('content'); ?>

       <script>
        $(document).ready(function () {
            // $('ul.nav > li').click(function (e) {
            //     e.preventDefault();
            //     $('ul.nav > li').removeClass('active');
            //     $(this).addClass('active');
            // });
        });
    </script>
</body>
</html>
