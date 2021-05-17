<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/globals.css">
	<link rel="stylesheet" href="../styles/main.css">
	<title>Login</title>
</head>

<body>
	<div class="container">
		<form action="signin.php" method="post" class="form-container">
			<div class="header">
				<h1>Login</h1>
			</div>

			<!-- Username -->
			<input type="text" placeholder=" Enter Username" class="textfield" name="username" required>

			<!-- Password -->
			<input type="password" placeholder="Enter Password" class="textfield" name="password" required>

			<!-- Submit Button -->
			<button type="submit" class="submit-btn">Login</button>
			<p>New here? Click here to <a href="signup.php">Sign Up</a></p>
		</form>
	</div>

</body>

</html>