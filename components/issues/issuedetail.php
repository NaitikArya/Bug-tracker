<?php

include_once("../../helper/connection.php");

$issue  = [
    "issue_name" => "",
    "startDate" => "",
    "endDate" => "",
    "priority" => "",
    "issue_summary" => ""
];

$issueId = -1;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["issueId"])) {
        $conn = new Connection();

        $issueId = $_GET["issueId"];

        $result = $conn->select("SELECT issueId, issue_name, startDate, endDate, priority, issue_summary FROM Issues WHERE issueId=$issueId");

        if (count($result) > 0) {
            $issue["issue_name"] = $result[0]["issue_name"];
            $issue["startDate"] = $result[0]["startDate"];
            $issue["endDate"] = $result[0]["endDate"];
            $issue["priority"] = $result[0]["priority"];
            $issue["issue_summary"] = $result[0]["issue_summary"];
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/globals.css">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/navbar.css">
    <title>Issue Details</title>
</head>

<body>

    <?php include_once('../menubar.php'); ?>

    <div class="container">
        <table class="display-data-container">
            <form action="resolve.php" method="get">
                <?php
                echo "<input type='hidden' name='issueId' value='$issueId'>"
                ?>
                <tr>
                    <th>Issue Name</th>
                    <td>
                        <?php
                        echo $issue["issue_name"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td>
                        <?php
                        echo $issue["startDate"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td>
                        <?php
                        echo $issue["endDate"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Priority</th>
                    <td>
                        <?php
                        echo $issue["priority"] == 0 ? "Low" : ($issue["priority"] == 1 ? "Medium" : "High");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Issue Summary</th>
                    <td>
                        <?php
                        echo $issue["issue_summary"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" class="btn">Resolve</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>

</body>

</html>