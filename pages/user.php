<?php
include_once("../helper/connection.php");

$userId = $_SESSION["userId"];
$conn = new Connection();

$projectIds = $conn->select("SELECT projects FROM users WHERE userId=$userId;")[0]["projects"];

$issues = $conn->select("SELECT * FROM issues WHERE projectId IN ($projectIds)");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="../styles/globals.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/main.css">
    <title>User</title>
</head>

<body>
    <?php include '../components/menubar.php'; ?>
    <div class="container">
        <div class="user-container">
            <div class="image">
                <i class="fas fa-user"> </i>
            </div>
            <div class="details">
                <div>
                    <div class="title">Projects</div>
                    <div><?php echo count(explode(",", $projectIds)); ?></div>
                </div>
                <div>
                    <div class="title">Issues</div>
                    <div><?php echo count($issues); ?></div>
                </div>
                <!-- <div>
                    <div class="title">Issue solved</div>
                    <div></div>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>