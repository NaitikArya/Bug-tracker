<?php
include_once("../../helper/connection.php");
$dbconn = new Connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../styles/globals.css" />
  <link rel="stylesheet" href="../../styles/main.css" />
  <link rel="stylesheet" href="../../styles/navbar.css" />
</head>

<body>
  <div class="container">
    <form class="form-container" action="addissue.php" method="POST">
      <div class="header">New Issue</div>

      <!-- Project Id -->
      <div class="combo-box">
        <select name="projectId">
          <option value="">Select Project</option>
          <?php
          $projectIds = $dbconn->select("SELECT projects FROM users WHERE username='" . $_SESSION['userName'] . "';");
          $projects = $dbconn->select("SELECT projectId, project_name FROM projects WHERE projectId IN (" . $projectIds[0]["projects"] . ");");

          foreach ($projects as $project) {
            echo "<option value='" . $project['projectId'] . "'>" . $project["project_name"] . "</option>";
          }
          ?>
        </select>
      </div>

      <!-- Issue Name -->
      <input type="text" placeholder="Issue Name" name="issueName" class="textfield" />

      <!-- Issue Start Date -->
      <input type="text" onfocus="(this.type='date')" placeholder="Start Date" name="startDate" class="textfield" />

      <!-- Issue End Date -->
      <input type="text" onfocus="(this.type='date')" placeholder="End Date" name="endDate" class="textfield" />

      <!-- Issue Priority -->
      <div class="combo-box">
        <select name="priority">
          <option value="">Select Priority</option>
          <option value="low">Low</option>
          <option value="medium">Medium</option>
          <option value="high">High</option>
        </select>
      </div>

      <!-- Issue Summary -->
      <textarea rows="4" name="summary" class="textarea" placeholder="Issue Summary"></textarea>

      <!-- Submit Button -->
      <button class="submit-btn">Submit</button>
    </form>
  </div>
</body>

</html>