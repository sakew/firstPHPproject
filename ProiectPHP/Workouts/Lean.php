<html>
<head>
<title>Gym Trainer</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
</head>

<body class="lean">
  <nav class="top-nav">
    <a href="../index.php"><button type="button" class="btn btn-dark">Gym Trainer</button></a>
    <a href="../WeeklyProgram.php"><button type="button" class="btn btn-dark">Weekly Program</button></a>
    <a href="../ExplainedExercises.php"><button type="button" class="btn btn-dark">Exercises Examples</button></a>
    <a href="../MealPlan.php"><button type="button" class="btn btn-dark">Meal Plan</button></a>
    <a href="../promise.php"><button type="button" class="btn btn-dark">Promise</button></a>
    <a href="../About.php"><button type="button" class="btn btn-dark">About</button></a>
  </nav>
<h1>Lean Body Workout</h1>
<div class="form">
<select name="form" onchange="location = this.value;">
<option value="WeeklyProgram.php">Select Program</option>
<option value="./Lean.php">Lean</option>
<option value="./Bulky.php">Bulky</option>
<option value="./Calisthenics.php">Calisthenics</option>
<option value="./Cardio.php">Cardio</option>
</select>
</div>
<div class="leanworkout">
  <img class="leanworkout" src="../images/leanworkout.png" alt="lean" title="lean">
</div>
</body>
<?php

include("../templates/footer.php");

?>

</html>
