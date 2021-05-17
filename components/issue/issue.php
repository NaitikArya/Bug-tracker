<<<<<<< HEAD:pages/issue.php
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
    <?php include 'menubar.php'; ?>

    <div class="container-1">
        <h4>Issues</h4>
    </div>
    <?php
    $a = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
    $issue = 'Issue Name';
    foreach ($a as $value) {
    ?>

        <div class="container">
            <div class="top_line">
                <a href="issuedetail.php" id="issue-detail-link">
                    <?php
                    echo "$issue";
                    ?>
                </a>
                <button class="material-icons delete-btn"> delete </button>
            </div>
            <div class="bottom_line">
                <p>Start:dd/mm/yy</p>
                <p>End:dd/mm/yy</p>
            </div>
        </div>
    <?php
    }
    ?>

    <a href="addissue.php" class="material-icons add-btn">add</a>



</body>

=======

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

    <?php include '../../menubar.php';?>

    <div class="container-1">
        <h4>Issues</h4>
    </div>

    <?php
        $a = array(10,9,8,7,6,5,4,3,2,1);
        $issue = 'Issue Name';
        foreach ($a as $value) 
        {
    ?>
          <div class="container">
            <div class="top_line">
               <a href = "issuedetail.php" id= "issue-detail-link"> <?php echo $issue ?></a>
                <button class="material-icons delete-btn"> delete </button>
            </div>
            <div class="bottom_line">
                <p>Start:dd/mm/yy</p>
                <p>End:dd/mm/yy</p>
            </div>
            </div>
    <?php
        }
    ?>
    
        <a href="addissue.php" class="material-icons add-btn">add</a>
    
    
    
</body>
>>>>>>> b1aba4acf057b25d4da68ec4258d9f84bd09353d:components/issue/issue.php
</html>