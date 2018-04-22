<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>

  <title>Find a Trainer</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>
<body>

  <div class="container-fluid">
  <div class="row">
  <div class="col-md-12">
    <ul class="nav nav-tabs">
      <li>
        <a href="Module2CourseProject.html">Home</a>
      </li>
      <li>
        <a href="FirstSteps.html">First Steps</a>
      </li>
      <li>
        <a href="page2.html">Basic Nutrition</a>
      </li>
      <li>
        <a href="page3.html">Setting a Schedule</a>
      </li>
      <li>
        <a href="page3.html">About Me</a>
      </li>
      <li  class="active">
        <a href="mod3_displaylist.php">Find a Trainer</a>
      </li>
    </ul>
    <div class="jumbotron">
      <h2>
        Page 1
      </h2>
      <p>Once the life changing goal is established, Healthy Happy You encourages users to discuss a regiment with any of our trainers. We encourage beginners to share lifestyles in order to create a custom workout regiment that's right for you!
      </p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <?php
      include 'module3_config.php';
      include 'module3_opendb.php';

      $sql= "SELECT fname, lname, `focus area`, email FROM `trainers`";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo "First Name: " . $row["fname"]. "<br>";
              echo "Focus Area'" . $row['focus area']. "<br>";
              echo "Last Name: " . $row["lname"]. "<br>";
              echo "E-mail: " . $row["email"]. "<br><hr>";
          }
      } else {
          echo "0 results";
      }

      mysqli_close($conn);

      ?>
      </div>
      <div class="col-md-4">
        <p>These trainers are available for support, insight, and direction for your personal wellness plan.
        </p>
      </div>
      <div class="col-md-4">
        <p>Feel free to reach out to any of them, and they will get back to you as soon as possible.
        </p>
      </div>
    </div>
  </div>
  </div>
  </div>


</div>
</body>
</html>
