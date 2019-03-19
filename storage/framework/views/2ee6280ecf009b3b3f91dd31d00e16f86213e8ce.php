<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Sign Up :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo e(asset('admin/css/style.css')); ?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo e(asset('admin/css/morris.css')); ?>" type="text/css"/>
<!-- Graph CSS -->
<link href="<?php echo e(asset('admin/css/font-awesome.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('admin/css/jquery-ui.css')); ?>">
<!-- jQuery -->
<script src="<?php echo e(asset('admin/js/jquery-2.1.4.min.js')); ?>"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo e(asset('admin/css/icon-font.min.css')); ?>" type='text/css' />
<!-- //lined-icons -->
</head>
<body>
	<div style="margin-top:-70px"; class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign Up</h2>
		<form method="POST">
        <?php echo e(csrf_field()); ?>

			<div class="fullname">
				<span class="fullname">Full Name:</span>
				<input type="text" name="fullname" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
      <div class="username">
				<span class="username">Username:</span>
				<input type="text" name="username" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Email:</span>
				<input type="text" name="email" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Confirm Password:</span>
				<input type="password" name="password_confirmation" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="Sign Up">
			</div>
			<div class="clearfix"></div>
		</form>
		<div class="back">
						<a href="<?php echo e(route('login.index')); ?>">Back to Login</a>
		</div>
    <!-- <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($err); ?></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?> -->
    <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><?php echo e($err); ?></p>
        </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
	</div>
	</div>
	</div>
</body>
</html>
