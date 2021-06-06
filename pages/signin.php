<?php
include 'connection.php';
$obj = new database_connection();
//$obj->connection();

$user = $_POST['username'];
$password = md5($_POST['password']);
//echo "<script> alert('$user') </script>";
//select statement is used to get the value of username and password from database
$select = "SELECT username, passwords FROM user";

$result = $obj->query($select);
if ($result->rowCount() >= 0) {
	while ($row = $result->fetch()) {
		//echo "username ".$row["username"]."<br>";
		if ($row["username"] == $user && $row["passwords"] == $password) {
			$_SESSION['user_name']="$user";
			echo "login successful<br>";
			header("Location: components/project/project.php");

			// send mail code
			$subject = "Registration successful";
			$message = "Welcome to our page. <br> thank u";
			$from = "From: Naitik Arya";
			if (mail($row["username"], $subject, $message, $from)) {
				//echo "mail send successfully";
			} else {
				//echo "Error: Cannot send mail";
			}
			exit(); //if login is successful it will send the mail and exit the program 
		}
	}
	echo "Inavalid user name or password";
} else {
	echo "Invalid user name or password"; // if my database is empty
}
