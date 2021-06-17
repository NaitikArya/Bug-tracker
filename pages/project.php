<?php
include_once("../helper/connection.php");
$dbconn = new Connection();
$projectIds = $dbconn->select("SELECT projects FROM users WHERE username='" . $_SESSION['userName'] . "';");
$projects = [];
if (isset($projectIds[0]['projects'])) {
    $projects = $dbconn->select("SELECT projectId, project_name, startDate, endDate FROM projects WHERE projectId IN (" . $projectIds[0]['projects'] . ");");
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
</head>

<body>
    <?php include '../components/menubar.php'; ?>

    <div class="container">
        <div class="card-container">
            <div class="header">
                Project
            </div>

            <!-- Creating Project Cards -->
            <?php
            if (count($projects) > 0) {
                foreach ($projects as $project) {
            ?>
                    <form type="GET" action="./issue.php" class="card">
                        <div onClick="javascript:this.parentNode.submit();" class="card-details">
                            <!-- Project Id -->
                            <?php
                            echo "<input type='hidden' name='projectId' value='", $project['projectId'], "'>"
                            ?>
                            <!-- Project Name -->
                            <div class="title">
                                <?php echo $project['project_name'] ?>
                            </div>
                            <!-- Project Start Date -->
                            <div class="start-date">Start:
                                <?php echo $project['startDate'] ?>
                            </div>
                            <!-- Project End Date -->
                            <div class="end-date">End:
                                <?php echo $project['endDate'] ?>
                            </div>
                        </div>
                    </form>
            <?php
                }
            } else {
                echo "No Projects.";
            }
            ?>
        </div>
        <a href="../components/project/addproject.html" class="add-btn">
            <i class="fas fa-sm fa-plus"></i></a>
    </div>


</body>

</html>