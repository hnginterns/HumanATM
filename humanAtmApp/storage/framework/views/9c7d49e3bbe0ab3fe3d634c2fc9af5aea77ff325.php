    <?php $__env->startSection('title'); ?>
        <title> Wallet | HumanATM</title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
     <!-- header -->
  <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="container-fluid blue-fall outerBox-margin">
                <div class="row box-margin">
                        <div class="col-md-8 col-md-offset-2 box-border">
                            <div class="row">
                                <div class="col-md-12 text-center wallet-boxColour">
                                <h4>Wallet Balance</h4> <hr>
                                <h1><b>N140,000</b></h1>
                                </div>
                            </div>
                            
                            <div class="row daily-margin text-center">
                            <div class="col-sm-4 col-sm-offset-1">
                                 <a href="wallet"> <h4 class=" box-inactive">  TRANSFER TO ACCOUNT</h4></a>
                                </div>
        
                                <div class="col-sm-4 col-sm-offset-2 ">
                                    <a href="fundwallet"><h4 class="box-active">FUND WALLET</h4></a>
                                    </div>
                                </div>
                        <div class="row text-center daily-margin">
                                <div class="col-md-12">
                                    <img src="img/4.png" alt="">
                                </div>
                            </div>
                        <div class="row daily-margin">
                            <div class="col-md-10 col-md-offset-1">
                                    <?php if(Session::has('status')): ?>
                                        <div class="alert-default"><?php echo e(Session::get('status')); ?></div>
                                    
                                    <?php endif; ?>
                                    <form action="<?php echo e(action('WalletsController@cardToWallet')); ?>" class="form" method="post">
                                        <?php echo e(csrf_field()); ?>

                                            <div class="form-group ">
                                                
                                        <input type="text" class="form-control wallet-input" placeholder="First Name" name="fname">
                                        <p class="walletLabel-below">MAX. AMOUNT  N50,000</p>

                                        
                                        <input type="text" class="form-control wallet-input" placeholder="Last Name" name="lname">
                                        <p class="walletLabel-below">DIKE THELMA KELECHI</p>

                                        
                                        <input type="text" class="form-control wallet-input" placeholder="Email" name="email">
                                        <br>

                                        <input type="text" class="form-control wallet-input" placeholder="Phone Number" name="phone">
                                        <br>

                                       
                                        <input type="text" class="form-control wallet-input" placeholder="Card Number" name="card_no">
                                        <br>

                                       
                                        <input type="text" class="form-control wallet-input" placeholder="CVV- 3 Digits" name="cvv">
                                        <br>

                                       
                                        <input type="text" class="form-control wallet-input" placeholder="Amount" name="amount">
                                        <br>

                                        <p class="wallet-text text-center">
                                            Transaction-Fee N55					
                                        </p>
                                                <button type="submit" class=" wallet-button">FUND WALLET</button>
                                            </div>
                                        </form>
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