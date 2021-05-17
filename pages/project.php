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
    <title>Project</title>
</head>

<body>

    <?php include '../components/menubar.php'; ?>
    <div class="container">
        <div class="card-container">
            <div class="header">
                Project
            </div>
            <?php
            $a = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
            $issue = 'Project Name';
            foreach ($a as $value) {
            ?>
                <div class="card">
                    <div class="card-details">
                        <div class="title" href="issuedetail.php">
                            <?php echo $issue . $value ?>
                        </div>
                        <div class="start-date">Start:dd/mm/yy</div>
                        <div class="end-date">End:dd/mm/yy</div>
                    </div>
                    <button class="card-button">
                        <i class="fas fa-trash"></i>
                    </button>
                    </button>
                </div>
            <?php
            }
            ?>
        </div>
        <a href="addissue.php" class="add-btn">
            <i class="fas fa-sm fa-plus"></i></a>
    </div>


</body>

</html>