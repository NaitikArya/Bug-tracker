
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
    <?php include 'menubar.php';?>

    <div class="container-1">
        <h4>Projects</h4>
    </div>
    <?php
        $a = array(10,9,8,7,6,5,4,3,2,1);
        $prj = 'project name';
        foreach ($a as $value) {
          echo '<div class="container">
            <div class="top_line">'
               ."<p> $prj </p>".
                '<button class="material-icons delete-btn"> delete </button>'.
            '</div>
            <div class="bottom_line">'
                ."<p>Start:dd/mm/yy</p>
                <p>End:dd/mm/yy</p>".
            '</div>
            </div>';
           
        }
    ?>
        <a href="adduser.php" class="material-icons add-btn" 
         style="bottom: 110px"
        >person_add</a>
        <a href="addprj.php" class="material-icons add-btn">add</a>
    
    
    
</body>
</html>