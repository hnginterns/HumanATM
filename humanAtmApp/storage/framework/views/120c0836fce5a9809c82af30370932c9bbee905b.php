    <?php $__env->startSection('title'); ?>
    <title> Monthly Transaction | HumanATM</title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
        <div class="container-fluid blue-fall outerBox-margin">
   
        <div class="row box-margin">
                <div class="col-md-8 col-md-offset-2 box-border">
                    <div class="row">
                        <div class="col-md-12 text-center box-color">
                            <h3>TRANSACTIONS</h3><hr>
                            <h4>Monthly Transactions</h4>
                        </div>
                    </div>
                    <!-- <div class="row paybills-margin2">
                        <div class="col-md-2 col-md-offset-3 text-center ">
                        <a href="dailytransaction"><h4 class="box-inactive">Today</h4></a>
                                
                        </div>
                        <div class="col-md-2 col-md-offset-0 text-center">
                        <a href="weeklytransaction"><h4 class="box-inactive">Week</h4></a>
                                
                        </div>
                        <div class="col-md-2 col-md-offset-0 text-center">
                            <a href="monthlytransaction"><h4 class="box-active">Month</h4></a>                                
                        </div>
                        
                    </div> -->
                    
                    <div class="row paybills-margin2">
                        <div class="col-md-8 col-md-offset-2 daily-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4><strong>Paid</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center daily-margin">
                                    <h1><strong>N30,000</strong></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center daily-margin">
                                    <h4><strong>Wallet ID: chykeofficial</strong></h4>
                                </div>
                            </div>
                        </div><div class="col-md-8 col-md-offset-2 daily-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4><strong>Paid</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center daily-margin">
                                    <h1><strong>N30,000</strong></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center daily-margin">
                                    <h4><strong>Wallet ID: chykeofficial</strong></h4>
                                </div>
                            </div>
                        </div><div class="col-md-8 col-md-offset-2 daily-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4><strong>Paid</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center daily-margin">
                                    <h1><strong>N30,000</strong></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center daily-margin">
                                    <h4><strong>Wallet ID: chykeofficial</strong></h4>
                                </div>
                            </div>
                        </div><div class="col-md-8 col-md-offset-2 daily-borderColor">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4><strong>Paid</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center daily-margin">
                                    <h1><strong>N30,000</strong></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center daily-margin">
                                    <h4><strong>Wallet ID: chykeofficial</strong></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
         
        </div>
<!-- Footer -->
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End footer-->
</body>
    <?php $__env->stopSection(); ?>
    
    
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>