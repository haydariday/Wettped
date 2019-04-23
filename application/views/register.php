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
								<img src="img/Facebook.png" alt="Facebook Login" class="fa fa-facebook-official fa-wp-neutral-5 " width="24">
								<span>
									<span class="auth-btn-long">Continue with Facebook</span>
									<span class="auth-btn-short">Continue</span>
								</span>
							</button>
						</div>
						<div class="col-xs-6 right">
							<button class="btn btn-lg btn-left-align btn-google btn-block">
								<img src="img/Google.jpg" alt="Google Login" class="google-login-logo" width="24">
								<span>
									<span class="auth-btn-long">Continue with Google</span>
									<span class="auth-btn-short">Continue</span>
								</span>
							</button>
						</div>
					</div>
					<span class="hr-with-text">OR</span>
					<form id="signup-form" action="/signup?nextUrl=/home" method="POST">
						<input type="hidden" name="signup-from" value="new_landing_reader_top">
						<input type="hidden" name="form-type" value="">
						<div class="input-group-vertical">
							<div class="form-group has-feedback invalid" data-attr="username">
								<label class="control-label sr-only" for="signup-username">Username</label>
								<input type="text" id="signup-username" class="form-control enable input-lg" name="username" placeholder="Username">
								<span class="fa fa-warning fa-wp-error-1 form-control-feedback validation on-invalid" aria-hidden="true" data-tip="true" data-for="username" currentitem="false" style="font-size: 24px;"></span>
								<div class="__react_component_tooltip place-top type-dark " id="username" data-id="tooltip" style="left: 556px; top: 221px;">
									<span>Username is required.</span>
								</div>
							</div>
							<div class="form-group has-feedback" data-attr="email">
								<label class="control-label sr-only" for="signup-email">Email</label>
								<input type="text" id="signup-email" class="form-control enable input-lg" name="email" placeholder="Email">
							</div>
							<div class="form-group has-feedback" data-attr="password">
								<label class="control-label sr-only" for="signup-password">Password</label>
								<input type="password" id="signup-password" class="form-control enable input-lg" name="password" placeholder="Password">
							</div>
							<div class="birthday-info">
								<span class="birthday-title">Birthday</span>
								<span class="fa fa-info fa-wp-neutral-3 on-dob-hover" aria-hidden="true" data-tip="We ask for your date of birth so you can have the right Wattpad experience for your age." currentitem="false" style="font-size: 16px;"></span>
								<div class="__react_component_tooltip place-top type-dark " data-id="tooltip"></div>
							</div>
							<div class="row birthday-fields">
								<div class="form-group has-feedback col-xs-5" data-attr="month">
									<label class="control-label sr-only" for="signup-month">Month</label>
									<select id="signup-month" class="form-control enable input-lg custom-select custom-select-lg" name="month" required="">
										<option value="" disabled="" selected="">Month</option>
										<option value="01">January</option>
										<option value="02">February</option>
										<option value="03">March</option>
										<option value="04">April</option>
										<option value="05">May</option>
										<option value="06">June</option>
										<option value="07">July</option>
										<option value="08">August</option>
										<option value="09">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</div>
								<div class="form-group has-feedback col-xs-3" data-attr="day">
									<label class="control-label sr-only" for="signup-day">Day</label>
									<select id="signup-day" class="form-control enable input-lg custom-select custom-select-lg" name="day" required="">
										<option value="" disabled="" selected="">Day</option>
										<option value="01">1</option>
										<option value="02">2</option>
										<option value="03">3</option>
										<option value="04">4</option>
										<option value="05">5</option>
										<option value="06">6</option>
										<option value="07">7</option>
										<option value="08">8</option>
										<option value="09">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
								</div>
								<div class="form-group has-feedback col-xs-4" data-attr="year">
									<label class="control-label sr-only" for="signup-year">Year</label>
									<select id="signup-year" class="form-control enable input-lg custom-select custom-select-lg" name="year" required="">
										<option value="" disabled="" selected="">Year</option>
										<option value="2019">2019</option>
										<option value="2018">2018</option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
									</select>
								</div>
							</div>
						</div>
						<span class="terms-of-service">By clicking below, you agree to Wattpad's <a href="/terms">Terms of Service</a> and <a href="/privacy">Privacy Policy</a>.</span>
						<input type="submit" class="btn btn-lg btn-left-align btn-orange btn-block enable" value="Start Reading">
					</form>
					<p>Already a Wattpad member? <a class="login-link" href="">Log In.</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>