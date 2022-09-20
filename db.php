<?php

  $con = mysqli_connect("localhost", "root","","practice_db");

  if (!$con) {
    die("Could not connect to database".mysqli_connect($con));
  }

?>