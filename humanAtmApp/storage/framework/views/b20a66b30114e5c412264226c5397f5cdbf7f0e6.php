<?php $__env->startSection('title'); ?>
<title> Log-in | HumanATM</title>
<?php $__env->stopSection(); ?>

   <?php $__env->startSection('content'); ?>
   <section>
     <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 </section>
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
                             
        <!--  -->
                <div class="row">
                    <div class="col-sm-12 text-center signup-formMargin">
                        <form   method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <input type="email" name="email" class="signup-data" placeholder="E-mail" value="<?php echo e(old('email')); ?>">
                            <?php if($errors->has('email')): ?>
                            <span class="help-block">
                            <span style="color:red"><?php echo e($errors->first('email')); ?></span>
                            </span>
                            <?php endif; ?>

                            <input type="password" name="password" id="signup-password" class="signup-data signup-password" placeholder="Password">
                            <p class='signup-eye'><i class="glyphicon glyphicon-eye-close"></i></p>
                            <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <span style="color:red"><?php echo e($errors->first('password')); ?></span>
                            </span>
                            <?php endif; ?>
                            <p ><a href="<?php echo e(route('password.request')); ?>" class="signup-forgot text-right">Forgot Password?</a></p>
                            <input type="submit" class="btn btn-success" id="login-submit"value="LOGIN">
                            <p class="auther-margin">
                                    Dont have an account?<br>
                                    <a href="<?php echo e(route('register')); ?>">
                                        Sign Up
                                    </a>
                                </p>
                            </form>
                    </div>

                </div>
                <!--  -->
                

                   

                   
          
                </div>

                </div>
</div>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<script src="<?php echo e(asset('js/togglepassword.js')); ?>"></script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>