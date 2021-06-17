<?php
include_once("../helper/connection.php");
$dbconn = new Connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
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
        <a href="../components/issues/addissue.html" class="add-btn">
            <i class="fas fa-sm fa-plus"></i></a>
    </div>


</body>

</html>