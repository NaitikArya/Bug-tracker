<?php

include_once("../../helper/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = new Connection();

    $projectName = $_POST["projectName"];
    $startDate = date("Y-m-d", strtotime($_POST["startDate"]));
    $endDate = date($_POST["endDate"]);

    echo $startDate, $endDate;

    $conn->insertData("INSERT INTO projects(project_name, startDate, endDate, admin) VALUES ('$projectName','$startDate','$endDate'," . $_SESSION['userId'] . ")");
    $projectId = $conn->dbconn->lastInsertId();

    $result = $conn->select("SELECT projects FROM users WHERE userName='" . $_SESSION['userName'] . "';");
    if ($result[0]["projects"] == "") {
        $result = "$projectId";
    } else {
        $result = $result[0]["projects"] . ",$projectId";
    }
    $conn->dbconn->exec("UPDATE users SET projects='$result' WHERE userName='" . $_SESSION['userName'] . "';");
}


$url = "../../pages/project.php";

ob_start();
header('Location: ' . $url);
ob_end_flush();
die();
