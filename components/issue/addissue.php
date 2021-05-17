<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php include '../../menubar.php';?>
    
    <div class="container-1">
        <h1>New Issue</h1>
        <form action="">
            <input type="text" placeholder="Issue Name" name="" class="inputbox">
            <br>
            <input type="text" onfocus="(this.type='date')" placeholder="Start Date" name="" class="inputbox">
            <br>
            <input type="text" onfocus="(this.type='date')" placeholder="End Date" name="" class="inputbox" >
            <br>
            <select name="" class="inputbox">
                <option value="">Select Priority</option>
                <option value="Low">Low</option>
                <option value="medium">Medium</option>
                <option value="Top">Top</option>
            </select>
            <br>
            <textarea rows="4" class="inputbox" placeholder="Issue Summary"></textarea>
            <br>
            <button class="material-icons submit-button"> send</button>
        </form>
    </div>
    
</body>
</html>