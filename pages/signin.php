<?php
include 'connection.php';
$obj = new Connection();

$user = $_POST['username'];
$password = md5($_POST['password']);
$select = "SELECT username, passwords FROM user WHERE username=$user AND password=$password;";

$result = $obj->select($select);
if (count($result) > 0) {

	//echo "username ".$row["username"]."<br>";
	if ($row["username"] == $user && $row["passwords"] == $password) {
		$_SESSION['user_name'] = "$user";
		// Storing user name in session

		echo "login successful<br>";
		header("Location: components/project/project.php");
	}
	echo "Inavalid user name or password";
} else {
	echo "Invalid user name or password"; // if my database is empty
}
