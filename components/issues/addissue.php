<?php

include_once("../../helper/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = new Connection();

    $issueId = $_POST["projectId"];
    $issueName = $_POST["issueName"];
    $startDate = date("Y-m-d", strtotime($_POST["startDate"]));
    $endDate = date($_POST["endDate"]);
    $priority = $_POST["priority"] == "low" ? 0 : ($_POST["priority"] ? 1 : 2);
    $issueSummary = $_POST["summary"];

    $conn->insertData("INSERT INTO issues(issue_name, startDate, endDate, priority, issue_summary, projectId) VALUES ('$issueName','$startDate','$endDate',$priority,'$issueSummary',$projectId)");
}


$url = "../../pages/issue.php";

ob_start();
header('Location: ' . $url);
ob_end_flush();
die();
