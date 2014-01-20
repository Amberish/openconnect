<!DOCTYPE html>
<html>
<head>
	<?php
		include_once "sub_templates/head-otherpages.php";
	?>
</head>
<body>
	<?php
		include_once "sub_templates/header.php";
	?>

	<div class="container container-login-page">
		<div class="row">
			<div class="col-md-4 login-form well">
				<h2>Sign Up</h2>
				<hr>
				<form method="POST" name="signup-form">
					
					<input type="text" name="fullname" id="input-fullname" placeholder="Fullname" class="form-control">
					<br>
					
					<input type="text" name="username" id="input-username" placeholder="Username" class="form-control">
					<br>
					
					<input type="text" name="email" id="input-email" placeholder="Email" class="form-control">
					<br>
					
					<input type="password" name="password" id="input-password" placeholder="Password" class="form-control">
					<br>
					
					<input type="password" name="confirm_password" id="input-confirm-password" placeholder="Confirm Password" class="form-control">
					<br>
					<input type="checkbox" name="terms-and-condition" id="input-terms-and-condition"> I agree the <a href="#">Terms and Services</a>
					<br><br>
					<input type="submit" value="Sign Up" id="sign-up" class="btn btn-success btn-block"> 
					<br><br>
				</form>
			</div>
			<div class="col-md-8 google-facebook-login">
				<h4>Already have an Account?</h4>
				<p>If you already have an existing account go <a href="<?php echo WEB_ROOT;?>/signin">Sign In</a>.</p>
				<br><br>
				<h4>-- OR --</h4>
				<br>
				<p>Connect throught Facebook or Google</p><br>

				<!-- Facebook Button Scripts -->
				<script type="text/javascript" src="//connect.facebook.net/en_US/all.js"></script>
				<script type="text/javascript" src="<?php echo JS;?>/facebook-login.js"></script>
				<button class="btn btn-facebook btn-md fa-login"><i class="fa fa-facebook"></i> | Connect with Facebook</button>&nbsp; or &nbsp;
				<!-- End facebook Button Scripts -->

				<!-- Google Button Scripts -->
				<button class="btn btn-google-plus btn-md"><i class="fa fa-google-plus"></i> | Connect with Google Plus</button>
			    <script type="text/javascript" src="<?php echo JS;?>/google-plus-login.js"></script>
				<!-- End Google Button Scripts -->
				<br><br><br><br>

				<div class="col-md-2"></div>
				<div class="alert alert-warning text-left col-md-8">
				<small>
					<p>Follow the instruction below for registration:</p>
					<ul>
						<li>Fullname can contain <strong>alphabets</strong> and <strong>spaces</strong>.</li>
						<li>Username can contain <strong>alphabets, numbers</strong> and <strong>.(period or dot)</strong>.</li>
						<li>Email must be a valid email address, like <strong>example@example.com</strong></li>
						<li>Password must be 8-15 characters.</li>
					</ul>
				</small>
				</div>
				
				<form class="form-sending-info" method="POST" action="<?php echo WEB_ROOT;?>/signup-third-party/">
					<input type="hidden" value="" id="so-username" name="username">
					<input type="hidden" value="" id="so-fullname" name="fullname">
					<input type="hidden" value="" id="so-email" name="email">
					<input type="hidden" value="" id="so-profile-url" name="profile-url">
					<input type="hidden" value="" id="so-image-loc" name="image-loc">
					<input type="hidden" value="" id="so-signup-method" name="signup-method">
				</form>	
				</div>
			</div>
		</div>
	</div>

	<?php
		include_once "sub_templates/footer.php";
	?>
</body>
</html>