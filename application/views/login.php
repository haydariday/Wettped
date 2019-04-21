<div class="WPM">
		<div class="modal-content">
			<span class="fa fa-remove fa-wp-neutral-1 close-btn" aria-hidden="true" style="font-size: 22px;"></span>
			<div id="authentication-panel" class="auth-form">
				<h2>Log in to Wattpad</h2>
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
					<form id="signup-form" action="/login?nextUrl=/home" method="POST">
						<div class="input-group-vertical">
							<div class="form-group has-feedback" data-attr="username">
								<label class="control-label sr-only" for="login-username">Username or Email</label>
								<input type="text" id="login-username" class="form-control enable input-lg" name="username" placeholder="Username or Email">
							</div>
							<div class="form-group has-feedback" data-attr="password">
								<label class="control-label sr-only" for="signup-password">Password</label>
								<input type="password" id="signup-password" class="form-control enable input-lg" name="password" placeholder="Password">
							</div>
						</div>
						<input type="submit" class="btn btn-lg btn-left-align btn-orange btn-block enable" value="Log in">
					</form>
				</div>
			</div>
		</div>
	</div>