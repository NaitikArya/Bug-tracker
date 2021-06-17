<?php
// from this file User can register him/her self in our application  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../helper/connection.php';
    $obj = new Connection();

    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $select = "SELECT username FROM users";
    $result = $obj->select($select);
    if (count($result) > 0) {
        if ($row[0]["username"] == $user_name) {
            echo "<script> alert('Someone have already registerd with this user name.') </script>";
            exit();
        }
    }

    $insert = "INSERT INTO users(username, email, password) 
             VALUES('$user_name', '$email', '$password')";

    if ($obj->insertData($insert)) {
        echo " <script> alert(' New record created successfully') </script>";
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
            <input type="email" placeholder="Email" class="textfield" name="email" required>

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