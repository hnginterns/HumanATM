<?php $__env->startSection('title'); ?>
    <title> Dashboard | HumanATM</title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
   <div class="container-fluid blue-fall outerBox-margin">
    <div class="row box-margin">
        
   <div class="col-md-8 col-md-offset-2 box-border">
    
                <div class="row">
                     <div class="col-md-12 text-center box-color">
                         <h3>VIEW YOUR PROFILE</h3><hr>
                         <h4> View & Update Profile</h4>
                     </div>
                 </div>

            <div class="row userpage-margin">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <img src="<?php echo e(asset('images/3.svg')); ?>" class="userpage-image" alt="userPicture">
                </div>
            </div>

            

               <?php if(session()->has('status')): ?>
            <div class="alert alert-info alert-info fade in">
                <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>


            <div class="row userpage-margin userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2 ">
                    <h3><span style="color:#828282"> Name: </span></h3>
                </div>
                <div class="col-xs-6 col-md-4 col-md-offset-1">
                    <h3><b><?php echo e($user->name); ?></b></h3>
                </div>
            </div>
            <div class="row userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2">
                    <h3><span style="color:#828282"> Gender: </span></h3>
                </div>
                <div class="col-xs-6 col-md-4 col-md-offset-1">
                    <h3><b>Female</b></h3>
                </div>

            </div>
            <div class="row userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2">
                    <h3><span style="color:#828282"> Wallet ID: </span></h3>
                </div>
                <div class="col-xs-6 col-md-4 col-md-offset-1">
                    <h3><b><?php echo e($user->wallet_id); ?></b></h3>
                </div>
            </div>
            <div class="row userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2">
                    <h3><span style="color:#828282"> Email Address: </span></h3>
                </div>
                <div class="col-xs-4 col-md-4 col-md-offset-1">
                    <h3><b><?php echo e($user->email); ?></b></h3>
                </div>
            </div>
            <div class="row userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2">
                    <h3><span style="color:#828282"> Mobile Number </span></h3>
                </div>
                <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                    <h3><b>+234 811 234 5678</b></h3>
                </div>
            </div>

                <div class="row userUpdate-button">
                    <div class="col-md-4 col-md-offset-4 text-center user-a">
                        <a href="/edituser/<?php echo e($user->id); ?>"><h4 class="btn btn-success btn-block"><b>Update Profile</b></h4></a>
                    </div>
            </div>

            
            <?php if($pendingWithdrawal): ?>
            <p class="col-xs-6 col-md-3 col-md-offset-2 "><h3  style="text-align: center"><span style="color:#828282; "> PENDING WITHDRAWAL </span></h3> 
               <hr>
           </p> 
           <div class="row userpage-margin userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2 ">
                <h3><span style="color:#828282"> Human ATM Name: </span></h3>
            </div>
             <?php if(isset(($my_payer))): ?>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b><?php echo e($my_payer->name); ?></b></h3>
            </div>
            <?php endif; ?>
        </div>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Amount </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b>NGN<?php echo e((int)$pendingWithdrawal->amount); ?></b></h3>
            </div>

        </div>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Human ATM Wallet ID: </span></h3>
            </div>
            <?php if(isset($my_payer)): ?>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b><?php echo e($my_payer->wallet_id); ?></b></h3>
            </div>

        </div>
        <?php if(isset($my_payer->profile)): ?>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Human ATM Phone Number: </span></h3>
            </div>
            <div class="col-xs-4 col-md-4 col-md-offset-1">
                <h3><b><?php echo e($my_payer->profile->phone_number); ?></b></h3>
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Human ATM Email Address </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b><?php echo e($my_payer->email); ?></b></h3>
            </div>
        </div>
        <?php if($my_payer->profile): ?>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Human ATM Location </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b><?php echo e($my_payer->profile->location); ?></b></h3>
            </div>
        </div>
        <?php endif; ?>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Status</span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b><?php echo e($pendingWithdrawal->status); ?></b></h3>
            </div>
        </div>

         <div class="col-xs-6 col-md-4 col-md-offset-4">
            <a href="/withdraw/confirm/receipt/<?php echo e($pendingWithdrawal->id); ?>" class="btn btn-primary"> I Have Recieved This</a>
        </div>
        <?php endif; ?>
        


         
            <?php if($pendingPayment): ?>
            <p class="col-xs-6 col-md-3 col-md-offset-2 "><h3  style="text-align: center; margin-top: 100px"><span style="color:#828282; "> PENDING PAYMENT </span></h3> 
               <hr>
           </p> 
           <div class="row userpage-margin userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2 ">
                <h3><span style="color:#828282"> Reciever Name: </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b><?php echo e($reciever->name); ?></b></h3>
            </div>
        </div>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Amount </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b>NGN<?php echo e((int)$pendingPayment->amount); ?></b></h3>
            </div>

        </div>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Reciever Wallet ID: </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b><?php echo e($reciever->wallet_id); ?></b></h3>
            </div>
        </div>
        <?php if($reciever->profile): ?>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Reciever Phone Number: </span></h3>
            </div>
            <div class="col-xs-4 col-md-4 col-md-offset-1">
                <h3><b><?php echo e($reciever->profile->phone_number); ?></b></h3>
            </div>
        </div>
        <?php endif; ?>

        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Reciever Email Address </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b><?php echo e($reciever->email); ?></b></h3>
            </div>
        </div>
        <?php if($reciever->profile): ?>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Reciever Location </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b><?php echo e($reciever->profile->location); ?></b></h3>
            </div>
        </div>
        <?php endif; ?>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Status</span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b><?php echo e($pendingPayment->status); ?></b></h3>
            </div>
        </div>

         <div class="col-xs-6 col-md-4 col-md-offset-4" style="margin-bottom: 50px">
            <a href="/reject/payment/<?php echo e($pendingPayment->id); ?>" class="btn btn-primary"> I Can't pay this</a>
        </div>
        <?php endif; ?>
        
        
    </div>
</div>
</div> 

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>