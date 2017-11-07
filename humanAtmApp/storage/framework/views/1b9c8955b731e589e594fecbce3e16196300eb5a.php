<html lang="en">


<?php $__env->startSection('title'); ?>
<title> Invite Friends | HumanATM</title>
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
						<h3>INVITE FRIENDS</h3><hr>
						
					</div>
				</div>


				<div class="row ">
					<div class="col-md-12 text-center">
						<h3><b>MAKE YOUR TRANSACTIONS FUN</b></h3>
						<h5><b>Earn 5% of what we charge you at the end of the month</b></h5>
					</div>
				</div>
				
				<div class="row userpage-margin">
					
					<div class="col-md-8 col-md-offset-2 text-center invite-form">
						<form action="<?php echo e(url('/invite/send')); ?>" method="post">
						<?php echo e(csrf_field()); ?>

						<input type="hidden" name="referral" class="invite-input" value="<?php echo e($user_id); ?>">
							
							<input type="email" name="email" class="invite-input" id="referral" placeholder="Enter an email to invite">
							
							<?php if(isset($message)): ?>
							<?php echo e($message); ?>

							<?php endif; ?>
							<br><br><br>
							<input type="submit" value="SUBMIT" class="btn btn-success invite-submit">
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>