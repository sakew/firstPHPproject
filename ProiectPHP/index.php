<html>
<head>
<title>Gym Trainer</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
</head>

<body class="index">
  <?php

  include("templates/header.php");
  include("databases/db.php");
  ?>

<h1>Gym Trainer</h1>

<div class=container6>
<p>You ready champ?</p>
</div>

<div class=login>
  <p>You can enter your details here and follow your progress through monthly updates of this formular:</p>
</div>

<table class="tabelatraining" border="3" class="table table-striped">
  <tr>
    <th width="200px" height="60px">Nume</th>
    <th width="200px">Prenume</th>
    <th width="200px">Varsta</th>
    <th width="200px">Luna</th>
    <th width="200px">KG</th>
  </tr>
  <?php
  while($elementAplicatieDinDB = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$elementAplicatieDinDB['nume']."</td>";
    echo "<td>".$elementAplicatieDinDB['prenume']."</td>";
    echo "<td>".$elementAplicatieDinDB['varsta']."</td>";
    echo "<td>".$elementAplicatieDinDB['luna']."</td>";
    echo "<td>".$elementAplicatieDinDB['kg']."</td>";
    echo"</tr>";
  }
?>

</table>
<form class="formulartraining" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p>Nume:<br></p>
  <input type="text" name="nume" placeholder="Numele" required><br>

<p>Prenume:<br></p>
  <input type="text" name="prenume" placeholder="Prenume" required><br>

<p>Varsta:<br></p>
  <input type="text" name="varsta" placeholder="Varsta" required><br>

<p>Luna:<br></p>
  <input type="text" name="luna" placeholder="Luna" required><br>

<p>KG:<br></p>
  <input type="number" name="kg" placeholder="KG" required><br>
<br>
<input style="font-size:20px" type="submit" value="Submit"><br>

</form>


<?php

include("templates/footer.php");

?>


</body>


</html>
