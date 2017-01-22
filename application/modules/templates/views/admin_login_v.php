<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Panel</title>
		<!-- Bootstrap -->
		<link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="<?php echo base_url('assets/css/custom2.css'); ?>" rel="stylesheet">
	</head>
	<body style="background:#F7F7F9;">
		<div class="">
			<a class="hiddenanchor" id="toregister"></a>
			<a class="hiddenanchor" id="tologin"></a>



			<div id="wrapper">
				<div id="login" class=" form">
					<section class="login_content">

						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('flashSuccess'); ?>
						<?php echo form_open('myadmin/signin', 'class="email" id="myform"'); ?>
							<h1>Login Form</h1>
							<div>
								<!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->
								<?php echo form_input($data=array('type' => 'text', 'name'=>'username','id'=>'Username', 'class' => 'form-control', 'placeholder' => 'Username')); ?></br>
							</div>
							<div>
								<!-- <input type="password" class="form-control" placeholder="Password" required="" /> -->
								<?php echo form_input($data=array('type' => 'password', 'name'=>'password','id'=>'Username', 'class' => 'form-control', 'placeholder' => 'Password')); ?></br>
							</div>
							<div>

								<?php echo form_button($data=array('type' => 'submit', 'name'=>'submit','id'=>'sbmt', 'class' => 'btn btn-default submit'),'Submit'); ?>
								<!-- <a class="reset_pass" href="#">Lost your password?</a> -->
							</div>
							<div class="clearfix"></div>
							<div class="separator">

								<div class="clearfix"></div>
								<br />
								<div>
									<h1><i class="fa fa-gear" style="font-size: 26px;"></i> myadmin</h1>
									<p>Myadmin - Powered by <a href="<?php echo $this->config->item('vendor_url') ?>"><?php echo $this->config->item('vendor_name') ?></a></p>
								</div>
							</div>
						<?php echo form_close();  ?>
					</section>
				</div>
			</div>
		</div>
	</body>
</html>
