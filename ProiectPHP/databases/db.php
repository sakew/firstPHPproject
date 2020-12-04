<?php

      $serverAddress = "127.0.0.1";
      $username      = "root";
      $password      = "";
      $databaseName  = "gym_trainer";

      $connection    = mysqli_connect($serverAddress, $username, $password);

      if($connection -> error === "")
      {
        echo "<br/> Connected successfully";
      }else{
        echo "<br/> ERROR connecting to DB!!!";
      }



      mysqli_select_db($connection, $databaseName);


      if(count($_POST)!==0)
      // if($_POST['submitButton']==='Trimite!?')
      {

            $nume         = $_POST['nume'];
            $prenume      = $_POST['prenume'];
            $varsta       = $_POST['varsta'];
            $luna         = $_POST['luna'];
            $kg           = $_POST['kg'];


            $comandaSqlInserare  = "INSERT INTO status (`nume`, `prenume`, `varsta`, `luna`, `kg`)
            VALUES ('$nume', '$prenume', '$varsta', '$luna', '$kg');
            ";

            mysqli_query($connection, $comandaSqlInserare);

        }


      $query = "SELECT * FROM status";

      $result = mysqli_query($connection, $query);
    ?>
