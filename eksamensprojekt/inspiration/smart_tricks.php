<?php

//Hvordan man får data fra database i todimensionelt 'array'
include 'connection/simple_conn.php';
$user = $_SESSION['user'];
$query = 'SELECT spacetime, txt FROM post WHERE user="'.$user.'" ORDER BY spacetime ASC';
$result = mysqli_query($conn, $query);

  mysqli_data_seek($result, 0);
  $row = mysqli_fetch_row($result);
  printf($row[0]);
  echo ': ';

  $result = mysqli_query($conn, $query);
  mysqli_data_seek($result, 0);
  $row = mysqli_fetch_row($result);
  printf($row[1]);
  ?>
