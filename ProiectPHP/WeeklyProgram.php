<html>
<head>
<title>Gym Trainer</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../CSS/style.css" />



</head>

<body class="program">
  <?php
  include("templates/header.php");
  ?>

<h1>Program</h1>

<div class="form">
<select name="form" onchange="location = this.value;">

<option value="WeeklyProgram.php">Select Program</option>
<option value="Workouts/Lean.php">Lean</option>
<option value="Workouts/Bulky.php">Bulky</option>
<option value="Workouts/Calisthenics.php">Calisthenics</option>
<option value="Workouts/Cardio.php">Cardio</option>
</div>

<div>
<?php

include("templates/footer.php");

?>
</div>
</body>


</html>
