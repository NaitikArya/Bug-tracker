<?php
include_once("../helper/connection.php");
$dbconn = new Connection();

$issues = [];
$projectIds;

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['projectId'])) {
    $issues = $dbconn->select("SELECT * FROM issues WHERE status=0 AND projectId IN (" . $_GET['projectId'] . ");");
    $projectIds = [["projects" => $_GET['projectId']]];
} else {
    $projectIds = $dbconn->select("SELECT projects FROM users WHERE username='" . $_SESSION['userName'] . "';");
    $projects = [];
    if (isset($projectIds[0]['projects'])) {
        $issues = $dbconn->select("SELECT * FROM issues WHERE status=0 AND projectId IN (" . $projectIds[0]['projects'] . ");");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/globals.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Issues</title>
</head>

<body>

    <?php include '../components/menubar.php'; ?>
    <div class="container">
        <div class="card-container">
            <div class="header">
                Issues
            </div>
            <!-- Creating Issue Cards -->
            <?php
            $issue = 'Issue Name';
            foreach ($issues as $issue) {
            ?>
                <form type="GET" action="../components/issues/issuedetail.php" class="card">
                    <input type="hidden" name="projectIds" <?php
                                                            echo "value=" . $projectIds[0]['projects'];
                                                            ?>>
                    <div onClick="javascript:this.parentNode.submit();" class="card-details">
                        <!-- Issue Id -->
                        <?php
                        echo "<input type='hidden' name='issueId' value='", $issue['issueId'], "'>"
                        ?>
                        <!-- Issue Name -->
                        <div class="title" href="issuedetail.php">
                            <?php echo $issue['issue_name'] ?>
                        </div>
                        <!-- Issue Start Date -->
                        <div class="start-date">Start:
                            <?php echo $issue['startDate'] ?>
                        </div>
                        <!-- Issue End Date -->
                        <div class="end-date">End:
                            <?php echo $issue['endDate'] ?>
                        </div>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
        <a href="../components/issues/addissueform.php" class="add-btn">
            <i class="fas fa-sm fa-plus"></i></a>
    </div>
</body>

</html>