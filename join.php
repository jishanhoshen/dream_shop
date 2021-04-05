<!DOCTYPE html>
<html lang="en">
<?php include("files/header.php"); ?>

<body>
<?php include("files/nav.php"); ?>

<div class="mainContainer container">
	<div class="row">
		<div class="col">
			<?php
			if (isset($_GET['action']) && $_GET['action'] == "signup") {
			?>
			<div class="login_box box theBox">
	            <div class="logo">
	                <h1>
	                    <a href="?action=signup">
	                        <span class="logof">Sign</span> <span class="logol">up</span>
	                    </a>
	                </h1>
	            </div>
	            <div class="custom_login">
					<form action="">
						<input type="text" placeholder="Email">
						<input type="password" placeholder="Create New Password">
						<input type="submit" value="Sign up">
					</form>
	            </div>
	            <div class="third_party_login">
	            	<div class="or">
	            		<span class="or">OR</span>
	            	</div>
					<div class="facebook">
						<?php include "files/facebook_login.php";?>
					</div>
					<div class="google">
						<?php include "files/google_login.php";?>
					</div>
	            </div>
	            <hr class="line_devider">
	            <div class="signup-btn">
	            	<a href="?action=login">Already a member? Log in</a>
	            </div>
			</div>
			<?php
			}else{
			?>
			<div class="login_box box theBox">
	            <div class="logo">
	                <h1>
	                    <a href="?action=login">
	                        <span class="logof">Log</span> <span class="logol">in</span>
	                    </a>
	                </h1>
	            </div>
	            <div class="custom_login">
					<form action="">
						<input type="text" placeholder="Email">
						<input type="password" placeholder="Password">
			            <div class="forgot">
			            	<a href="#" >Forgot your password?</a>
			            </div>
						<input type="submit" value="Log in">
					</form>
	            </div>
	            <div class="third_party_login">
	            	<div class="or">
	            		<span class="or">OR</span>
	            	</div>
					<div class="facebook">
						<?php include "files/facebook_login.php";?>
					</div>
					<div class="google">
						<?php include "files/google_login.php";?>
					</div>
	            </div>
	            <hr class="line_devider">
	            <div class="signup-btn">
	            	<a href="?action=signup">Not on Pinterest yet? Sign up</a>
	            </div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php include("files/footer.php"); ?>
</body>
</html>