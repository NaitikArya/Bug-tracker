<?php
if (isset($_POST['submit'])) {
    include 'connection.php';
    $obj = new database_connection();

    $user_name = $_POST['username'];
    $email = $_POST['Email'];
    $password = md5($_POST['password']);

    // $conn=mysqli_connect('localhost','root','','registration');

    //select statement to check if email is repeated

    $select = "SELECT username FROM user";
    $result = $obj->query($select);
    if ($result->rowCount() >= 0) {
        while ($row = $result->fetch()) {
            //echo "m_email ".$row["m_email"]."<br>";
            if ($row["username"] == $user_name) {
                echo "<script> alert('Someone have already registerd with this user name.') </script> ";
                exit();
            }
        }
    }

    $insert = "INSERT INTO user(username, email, passwords) 
             VALUES('$user_name', '$email', '$password')";

    if ($obj->query($insert)) {
        echo " <script> alert(' New record created successfully') </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //send mail code
    $subject = "Registration successful";
    $message = "Welcome to our page. <br> thank u";
    $from = "From: Bug tracker";
    if (mail($email, $subject, $message, $from)) {
        //echo "mail send successfully";
    } else {
        //echo "Error: Cannot send mail";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/globals.css">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Register page</title>
</head>

<body>
    <div class="container">
        <form class="form-container" action="" method="post">
            <div class="header">
                <h1>Sign up</h1>
            </div>
            <!-- Username -->
            <input type="text" placeholder="Username" name="username" class="textfield" required>

            <!-- Email -->
            <input type="Email" placeholder="Email" class="textfield" name="Email" required>

            <!-- Password -->
            <input type="password" placeholder="Password" class="textfield" name="password" required>

            <!-- Submit Button -->
            <button type="submit" name="submit" class="submit-btn">Sign up</button>
            <p>Already have an account? <a href="login.php">Click here</a></p>
        </form>
    </div>
    </div>
</body>

</html>