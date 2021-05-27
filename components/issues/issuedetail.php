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

    <?php include '../menubar.php'; ?>

    <div class="container">
        <p style="display:inline;">
            <span>Issue Name : </span>
            <span style="margin-left: 1rem; color: rgb(78 65 146);">Issue Name</span>
        </p>
        <br>
        <p style=" display:inline;">
            <span>Start Date : </span>
            <span style="margin-left: 1.7rem;color: rgb(78 65 146);">Start date</span>
        </p>
        <br>
        <p style="display:inline;">
            <span>End Date : </span>
            <span style="margin-left: 2rem; color: rgb(78 65 146);">End Date</span>
        </p>
        <br>
        <p style="display:inline;">
            <span>Priority : </span>
            <span style="margin-left: 2.9rem; color: rgb(78 65 146);">Priority</span>
        </p>
        <br>
        <p>Issue Summary</p>
        <p style="color: rgb(78 65 146);">A bug tracking system or defect tracking system is a software application that keeps track of reported software bugs in software development projects. It may be regarded as a type of issue tracking system.</p>
        <br>
        <a href="resolve.php" class="resolve-button"> Resolve</a>
    </div>

</body>

</html>