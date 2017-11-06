<?php $__env->startSection('title'); ?>
<title> Error 404 | HumanATM</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
	<div class="container-fluid">
		<!-- header -->
		<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="row">
			<div class="col-sm-offset-3 col-sm-6  page404-rectangle-box" >
				<div class="page404-main text-center">
					<h2 class="page404-header"><b>ERROR</b></h2>
					<img src="<?php echo e(asset('images/Group.png')); ?>" class="img-responsive " height="150px">
					<p class="page404-paragraph"> Oops!! i think you're on the wrong track to meeting the Human Atm 
						<br>of your choice, you can go to the homepage to restart your journey. </p>

						<div class="page404-navigate">
							<a class="page404-bg-blue" href="#">Go back to Homepage</a><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>