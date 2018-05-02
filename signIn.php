<?php
session_start();
include 'session/db_handler.php';
include_once 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-4">
			<form id="signIn" action="session/useSignIn.php" method="POST">
				<h2>Sign In</h2>
				<?php echo $_SESSION["signUp_msg"]; ?>
				<div class="form-group">
					<b><label>Email address</label></b>
					<input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required>
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					<b><label>Password</label></b>
					<input type="password" name="password" class="form-control" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-primary">Sign In</button>
				<?php echo $_SESSION["welcome_msg"]?>
				<p>By continuing you agree to our Terms and Conditions and the Music Land ® Program Terms.</p>
				<p>Forgot your password? <a href="#">Reset it</a></p>
				<p>Don't have an account? <a href="signUp.php">Create one</a></p>
			</form>
			<a href="index.php">Back to main page</a>
		</div>
		<div class="col-4"></div>
		<div class="col-4"></div>
	</div>
</div>



