<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Wettped</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/style.css">
	<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="WPM">
		<div class="modal-content">
			<span class="fa fa-remove fa-wp-neutral-1 close-btn" aria-hidden="true" style="font-size: 22px;"></span>
			<div id="authentication-panel" class="auth-form">
				<h2>Join Wettped</h2>
				<p>Whatever you're into it's all free on Wettped: the world's largest community for readers and writers.</p>
				<div class="panel-body">
					<div class="signin-buttons clearfix">
						<div class="col-xs-6 left">
							<button class="btn btn-lg btn-left-align btn-facebook btn-block">
								<img src="<?= base_url('img/Facebook.png'); ?>" alt="Facebook Login" class="fa fa-facebook-official fa-wp-neutral-5 " width="24">
								<span>
									<span class="auth-btn-long">Continue with Facebook</span>
									<span class="auth-btn-short">Continue</span>
								</span>
							</button>
						</div>
						<div class="col-xs-6 right">
							<button class="btn btn-lg btn-left-align btn-google btn-block">
								<img src="<?= base_url('img/Google.jpg'); ?>" alt="Google Login" class="google-login-logo" width="24">
								<span>
									<span class="auth-btn-long">Continue with Google</span>
									<span class="auth-btn-short">Continue</span>
								</span>
							</button>
						</div>
					</div>
					<span class="hr-with-text">OR</span>
<<<<<<< HEAD
					<form id="signup-form" action="" method="POST">
						<input type="hidden" name="signup-from" value="new_landing_reader_top">
						<input type="hidden" name="form-type" value="">
						<div class="input-group-vertical">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username">
								<small class="form-text text-danger"><?= form_error('username'); ?></small>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" id="email">
								<small class="form-text text-danger"><?= form_error('email'); ?></small>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password">
								<small class="form-text text-danger"><?= form_error('password'); ?></small>
							</div>
=======
					<form id="signup-form" action="/signup?nextUrl=/home" method="POST">
						<input type="hidden" name="signup-from" value="new_landing_reader_top">
						<input type="hidden" name="form-type" value="">
						<div class="input-group-vertical">
							<div>Username
							<input type="text" class="form-control" name="username" value="<?=isset($default['username'])? $default['username'] : ""?>">
							</div>
							<div>email
								<input type="text" class="form-control" name="email" value="<?=isset($default['email'])? $default['email'] : ""?>">
							</div>
							<div>password
							<input type="text" class="form-control" name="password" value="<?=isset($default['password'])? $default['password'] : ""?>">
							</div>

>>>>>>> eae5687d9f13285a95b8e611adc419d6d993ac69
						</div>
						<span class="terms-of-service">By clicking below, you agree to Wattpad's <a href="/terms">Terms of Service</a> and <a href="/privacy">Privacy Policy</a>.</span>
						<button name="tombol_submit" class="btn btn-lg btn-left-align btn-orange btn-block enable">
						Register
						</button>
					</form>
					<p>Already a Wattpad member? <a class="login-link" href="login">Log In.</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>