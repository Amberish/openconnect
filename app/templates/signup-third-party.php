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
					
					<input type="text" name="fullname" id="input-fullname" value="<?php echo $_POST['fullname'];?>" placeholder="Fullname" class="form-control">
					<br>
					
					<input type="text" name="username" id="input-username" value="<?php echo $_POST['username'];?>" placeholder="Username" class="form-control">
					<br>
					
					<input type="text" name="email" disabled id="input-email" value="<?php echo $_POST['email'];?>" placeholder="Email" class="form-control">
					<br>
					
					<input type="password" name="password" id="input-password" placeholder="Password" class="form-control">
					<br>
					
					<input type="text" name="confirm_password" id="input-confirm-password" placeholder="Confirm Password" class="form-control">
					<br>

					<input type="checkbox" name="terms-and-condition" > I agree the <a href="#">Terms and Services</a>
					<br><br>

					<input type="submit" value="Sign Up" class="btn btn-success btn-block"> 
					<br>
					<input type="hidden" name="image-loc" value="<?php echo $_POST['image-loc'];?>" >
				</form>
			</div>
			<div class="col-md-8 google-facebook-info">
				<h4><span style="<?php if($_POST['signup-method'] == 'Facebook'){ echo 'background: #3b5998;'; }else{ echo 'background: #D50F25;';}?> color: #FFF; padding: 10px;">Thank you for choosing <?php echo $_POST['signup-method'];?> as signup option.</span></h4>
				<p>Your Information being used:</p>
				<img src="<?php echo $_POST['image-loc'];?>"><br>
				FULLNAME : <?php echo $_POST['fullname'];?><br>
				USERNAME : <?php echo $_POST['username'];?><br>
				EMAIL : <?php echo $_POST['email'];?><br>
				Profile URL : <?php echo $_POST['profile-url'];?><br>
				You can change these details except email.
			</div>
		</div>
	</div>

	<?php
		include_once "sub_templates/footer.php";
	?>
</body>
</html>