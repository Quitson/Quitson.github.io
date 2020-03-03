<?php
  include '/opt/lampp/htdocs/main/misc/function.php';
  include '/opt/lampp/htdocs/main/connection/simple_conn.php';
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <h3>Velkommen til Frontpage</h3>

    <form action="post_aux.php" method="post">
      <input type="text" name="txt" placeholder="Del dine tanker...">
      <input type="submit" name="post" value="Lav opslag">
    </form><br><br>

    <h3>Opslag</h3>
  </body>
</html>

 <?php

$query = 'SELECT * FROM post ORDER BY spacetime DESC';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
  echo 'Date: ' . $row['spacetime'] . "<br>" . $row['user'] . ': ' . $row['txt'] . '<br><br>';
  }
}

logout();

  //sluk forbindelsen igen
  mysqli_close($conn);
   ?>
