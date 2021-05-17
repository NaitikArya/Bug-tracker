<?php
// from this file User can register him/her self in our application  
    if(isset($_POST['submit'])){
		include 'connection.php';
		$obj = new database_connection();

		$user_name = $_POST['username'];
		$email = $_POST['Email'];
		$password = md5($_POST['password']);

	   
	    
            //select statement to check if user name is repeated

            $select= "SELECT username FROM user";
            $result= $obj->connection()->query($select);
            if ($result -> rowCount() >= 0) 
            {
                while ($row = $result -> fetch()) 
                {
                    //echo "m_email ".$row["m_email"]."<br>";
                    if ($row["username"]== $user_name) 
                    {
                        echo "<script> alert('Someone have already registerd with this user name.') </script> ";
                        exit();
                    } 				
                }
		    } 
		
            $insert= "INSERT INTO user(username, email, passwords) 
             VALUES('$user_name', '$email', '$password')";

                if ($obj->connection()->query($insert)) { 
                    echo " <script> alert(' New record created successfully') </script>";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

		    //send mail code
			$subject="Registration successful";
			$message="Welcome to our page. <br> thank u";
			$from="From: Bug tracker";
			if (mail($email, $subject, $message, $from)) {
				//echo "mail send successfully";
			} 
            else {
				//echo "Error: Cannot send mail";
			}

    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
</head>
<body style="background-color: rgb(235 233 243);">
    <div class="container-2">
    <?php include 'menubar.php';?>
	<div class="mainbox">
		<h1>Sign up</h1>
	    <form action="" method="post">

			<input type="text" placeholder="Set username" name="username" class="inputbox" required><br>
			<input type="Email" placeholder="Email" class="inputbox" name="Email" required><br>
			<input type="password" placeholder="Set password" class="inputbox" name="password" required><br>	
			<div align="center">
				<button name="submit" class="submitbutton">Sign up</button>
			</div>
			<p>Already have an account?<a href="login.php">Click here</a></p>
		</form>
    </div>
    </div>
</body>
</html>