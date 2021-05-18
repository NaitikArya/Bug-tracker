<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/globals.css">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include '../menubar.php'; ?>

    <div class="container">
        <form class="form-container" action="">
            <div class="header">New Issue</div>

            <!-- Issue Name -->
            <input type="text" placeholder="Issue Name" name="" class="textfield">

            <!-- Issue Start Date -->
            <input type="text" onfocus="(this.type='date')" placeholder="Start Date" name="" class="textfield">

            <!-- Issue End Date -->
            <input type="text" onfocus="(this.type='date')" placeholder="End Date" name="" class="textfield">

            <!-- Issue Priority -->
            <div class="combo-box">
                <select name="">
                    <option value="">Select Priority</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>

            <!-- Issue Summary -->
            <textarea rows="4" class="textarea" placeholder="Issue Summary"></textarea>

            <!-- Submit Button -->
            <button class="submit-btn">Submit</button>
        </form>
    </div>

</body>

</html>