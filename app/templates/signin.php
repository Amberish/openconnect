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
				<h2>Sign In</h2>
				<hr>
				<form method="POST">
					
					<input type="text" name="username" id="input-username" placeholder="Username" class="form-control">
					<br>
					
					<input type="password" name="password" id="input-password" placeholder="Password" class="form-control">
					<br>
					<input type="submit" value="Sign In" class="btn btn-primary btn-block"><br><span><a href="#">Forgot Password?</a></span>
					<br><br>
					<p>Don't have an Account? <a href="<?php echo WEB_ROOT;?>/signup">Create Account</a></p>
				</form>
			</div>
			<div class="col-md-8 google-facebook-login">
				<h4>-- OR --</h4>
				<br>
				<p>Connect throught Facebook or Google</p><br>
				
				<!-- Facebook Button Scripts -->
				<script type="text/javascript" src="//connect.facebook.net/en_US/all.js"></script>
				<script type="text/javascript" src="<?php echo JS;?>/facebook-login.js"></script>
				<button class="btn btn-facebook btn-md fa-login"><i class="fa fa-facebook"></i> | Connect with Facebook</button>&nbsp; or &nbsp;
				<!-- End facebook Button Scripts -->

				<!-- Google Button Scripts -->
				<button class="g-signin btn btn-google-plus btn-md"
					    data-callback="signinCallback"
					    data-clientid="1041645441787-42ltm6m0eq8ooko3j63olt2b7rq4cl82.apps.googleusercontent.com"
					    data-cookiepolicy="single_host_origin"
					    data-requestvisibleactions="http://schemas.google.com/AddActivity"
					    data-scope="https://www.googleapis.com/auth/plus.login">
					    <i class="fa fa-google-plus"></i> | Connect with Google Plus
			    </button>
			    <script type="text/javascript" src="<?php echo JS;?>/google-plus-login.js"></script>
				<!-- End Google Button Scripts -->

				<!-- Facebook Output container -->
				<div class="fb-info-container">
					
				</div>
				<!-- End Facebook Output Container -->
			</div>
		</div>
	</div>

	<?php
		include_once "sub_templates/footer.php";
	?>
</body>
</html>