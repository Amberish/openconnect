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
				<form method="POST">
					
					<input type="text" name="fullname" id="input-fullname" placeholder="Fullname" class="form-control">
					<br>
					
					<input type="text" name="username" id="input-username" placeholder="Username" class="form-control">
					<br>
					
					<input type="text" name="email" id="input-email" placeholder="Email" class="form-control">
					<br>
					
					<input type="password" name="password" id="input-password" placeholder="Password" class="form-control">
					<br>
					
					<input type="text" name="confirm_password" id="input-confirm-password" placeholder="Confirm Password" class="form-control">
					<br>
					<input type="checkbox" name="terms-and-condition" > I agree the <a href="#">Terms and Services</a>
					<br><br>
					<input type="submit" value="Sign Up" class="btn btn-success btn-block"> 
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
				<script type="text/javascript" src="//connect.facebook.net/en_US/all.js"></script>
				<script type="text/javascript" src="<?php echo JS;?>/facebook-login.js"></script>
				<button class="btn btn-facebook btn-md fa-login"><i class="fa fa-facebook"></i> | Connect with Facebook</button>&nbsp; or &nbsp;
				<button class="btn btn-google-plus btn-md"><i class="fa fa-google-plus"></i> | Connect with Google Plus</button>
				<div class="fb-info-container">
					
				</div>
			</div>
		</div>
	</div>

	<?php
		include_once "sub_templates/footer.php";
	?>
</body>
</html>