<?php $__env->startSection('title'); ?>
<title> Wallet | HumanATM</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- header -->
  <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
        <div class="container-fluid blue-fall outerBox-margin">
            
            <div class="row box-margin">
                    <div class="col-md-8 col-md-offset-2 box-border">
                        <div class="row">
                            <div class="col-md-12 text-center wallet-boxColour">
                                <h3>Make a Request</h3><hr>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4  location-text text-center">
                                    <h4> HUMAN ATM</h4>
                                </div>
                            </div>
                               <?php $__currentLoopData = $human_atms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $human_atm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  
                               
                            <div class="row  location-margin">
                                <div class="col-md-7 col-md-offset-1 text-center location-box listing-borderColor">
                                    <h4><?php echo e($human_atm->user->name. "  ,". $human_atm->location); ?> </h4>
                                </div>

                                <div class="col-md-2 col-md-offset-1 text-center ">
                                    <a href="/human-atm/<?php echo e($human_atm->id); ?>" class="btn btn-primary btn-block listing-request "> REQUEST </a>
                            </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="row ">
                                    <div class="col-md-5 col-md-offset-4 location-text  text-center">
                                        <h4> STATIC ATM</h4>
                                    </div>
                                </div>
                                <?php $__currentLoopData = $bank_atms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank_atm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                               
                                <div class="row align-items-center profile-margin ">
                                    <div class="col-md-8 col-md-offset-2 text-center listing-borderColor">
                                        <h4><?php echo e($bank_atm->bank->name . '  ,'. $bank_atm->location); ?></h4>
                                    </div>
    
                                   
                                </div><br>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
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