<?php
  $servername = 'localhost';
  $username = 'oliv6757.elev.vt';
  $password = 'yvvoki7b';
  $database = 'oliv6757_elev_vtg_dk';

  //create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  //Check connection
  if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
  }

  //og en masse kode med kommunikation med databasen
 ?>
