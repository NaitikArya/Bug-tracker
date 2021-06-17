<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include '../helper/connection.php';
	$obj = new Connection();

	$user = $_POST['username'];
	$password = md5($_POST['password']);
	$select = "SELECT userId, username, password FROM users WHERE username='$user' AND password='$password';";

	$result = $obj->select($select);
	if (count($result) > 0) {
		$row = $result[0];
		if ($row["username"] == $user && $row["password"] == $password) {
			session_start();
			$_SESSION['userId'] = $row["userId"];
			$_SESSION['userName'] = $row["username"];

			echo "Login Successful<br>";
			header("Location: ./project.php");
		}
	} else {
		echo "<script>alert('Invalid user name or password')</script>";
	}
}
?>
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
		<form action="login.php" method="post" class="form-container">
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