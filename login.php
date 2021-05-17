<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
    
</head>
<body style="background-color: rgb(235 233 243);">

	<div class="container-2">
    <?php include 'menubar.php';?>
    <div class="mainbox">
			<h1>Login</h1>
			<form action="signin.php" method="post">
				<input type="text" placeholder=" Enter registered User Name" class="inputbox" name="username" required><br>
				<input type="password" placeholder="Enter password" class="inputbox" name="password" required><br>
				<div align="center">
					<button class="submitbutton">Login</button>
				</div> 
				<p>New here?click here to<a href="signup.php"> sign up</a></p>
			</form>
    </div>	
    </div>

</body>
</html>