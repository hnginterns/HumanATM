    <?php $__env->startSection('title'); ?>
        <title> PayBills | HumanATM</title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
      <!-- header -->
      <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <body>
      <div class="container-fluid blue-fall outerBox-margin">
        <div class="row box-margin">
              <div class="col-md-8 col-md-offset-2 box-border">

                      <div class="row edit-bottom">
                          <div class="col-md-12 text-center box-color">
                              <h3>PAY BILLS</h3><hr>
                              
                          </div>
                      </div>

                            <div class="row paybills-margin">
                                <div class="col-sm-4 col-sm-offset-1 payshadow  text-center">
                                <img src="<?php echo e(asset('images/ant.png')); ?>" class="bills-image" alt="userPicture">
                                <h4>Cable TV Subscription</h4>
                                </div>

                                <div class="col-sm-4 col-sm-offset-1 payshadow  text-center">
                                <img src="<?php echo e(asset('images/uti.png')); ?>" class="bills-image" alt="userPicture">
                                <h4>Utility Bills</h4>
                                </div>
                                <div class="col-sm-4 col-sm-offset-1 payshadow text-center">
                                <img src="<?php echo e(asset('images/data.png')); ?>" class="bills-image" alt="userPicture">
                                <h4>Data Subscription</h4>
                                </div>
                                <div class="col-sm-4 col-sm-offset-1 payshadow text-center">
                                <img src="<?php echo e(asset('images/recharge.png')); ?>" class="bills-image" alt="userPicture">
                                <h4>Mobile Recharge</h4>
                                </div>




                            
                        </div>
                </div>
    
            </div>
            <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<?php $__env->stopSection(); ?>
     
        
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>