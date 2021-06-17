<?php
include_once("../../helper/connection.php");

$dbconn = new Connection();
$issueId;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $issueId = $_GET["issueId"];
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resolveReply = $_POST["resolveReply"];
    $issueId = $_POST["issueId"];
    $resolverId = $_SESSION["userId"];

    $dbconn->insertData("INSERT INTO resolved(resolve_reply, issueId, resolverId) VALUES ('$resolveReply', $issueId, $resolverId);");

    $dbconn->dbconn->exec("UPDATE issues SET status=1 WHERE issueId=$issueId;");

    header("Location: ../../pages/issue.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/globals.css">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/navbar.css">
</head>

<body>

    <?php include '../menubar.php'; ?>
    <div class="container">
        <form method="POST" action="resolve.php" class="form-container">
            <div class="header">
                Resolve
            </div>
            <input type="hidden" name="issueId" value=<?php echo "$issueId" ?>>
            <textarea name="resolveReply" class="textarea" placeholder="Resolve Reply"></textarea>
            <button class="submit-btn">Send</button>

        </form>
    </div>
</body>

</html>