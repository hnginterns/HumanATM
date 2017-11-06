<?php $__env->startSection('title'); ?>
<title> Sign Up| HumanATM</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body>




    <div class="container-fluid blue-fall ">
    
    <div class = "row auth-margin">
        
        <div class="col-sm-4 col-sm-offset-4 text-center authbox">

            <!--  -->
            <div class="row">
                <div class="col-sm-12 text-center">
                        <img src="<?php echo e(asset('images/logo.png')); ?>" class="bills-image" alt="userPicture">
                        <h1 class="auth-head">HUMAN ATM</h1>
                        <p class="auth-color">FOR THE NEXT BILLION USERS</p>
                </div>
            </div>
            <!--  -->



            <div class='row'>
            <div class="col-sm-12 text-center">
                <form  class="signup-innerform" method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="signup-data <?php echo e($errors->has('name') ? ' has-error' : ''); ?>" id="" placeholder="Full Name">
                    <?php if($errors->has('name')): ?>
                    <span class="help-block">
                    <span style="color:red"><?php echo e($errors->first('name')); ?></span>
                    </span>
                    <?php endif; ?>

                    <input type="text" name="wallet_id" class="signup-data <?php echo e($errors->has('wallet_id') ? ' has-error' : ''); ?>" value="<?php echo e(old('wallet_id')); ?>" placeholder="Wallet ID">
                    <?php if($errors->has('wallet_id')): ?>
                    <span class="help-block">
                    <span style="color:red"><?php echo e($errors->first('wallet_id')); ?></span>
                    </span>
                    <?php endif; ?>



                    <input type="email" name="email"  class="signup-data <?php echo e($errors->has('email') ? ' has-error' : ''); ?>" value="<?php echo e(old('email')); ?>" placeholder="Email Address">
                    <?php if($errors->has('email')): ?>
                    <span class="help-block">
                    <span style="color:red"><?php echo e($errors->first('email')); ?></span>
                    </span>
                    <?php endif; ?>



                    <input type="password" name="password"  class="signup-data" placeholder="Password">
                    <?php if($errors->has('password')): ?>
                    <span class="help-block">
                    <span style="color:red"><?php echo e($errors->first('password')); ?></span>
                    </span>
                    <?php endif; ?>


                    <p class='signup-eye'><i class="glyphicon glyphicon-eye-close"></i></p>
                    <input type="password" name="password_confirmation"  id="signup-password1" class="signup-data signup-password" placeholder="Confirm password">


                    <input type="submit" class="btn btn-success signup-data" value="CREATE ACCOUNT">
                    <p id='signup-signin'>

                    Have an account?<br>
                        <a href="<?php echo e(route('login')); ?>" class="" >
                        Sign In
                        </a>
                    </p>
                </form>
            </div>               
        </div>
        </div>
    </div>
    </div>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
</body>
    <script src="<?php echo e(asset('js/togglepassword.js')); ?>">  </script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>