<?php
  include '/opt/lampp/htdocs/main/misc/function.php';
  include '/opt/lampp/htdocs/main/connection/simple_conn.php';
  session_start();

  echo "Dette er " . $_SESSION['user'] . "'s profilside";

  echo "<br><br>Dette er dit seneste opslag:<br>";

  $user = $_SESSION['user'];
  $query = 'SELECT spacetime, txt FROM post WHERE user="'.$user.'" ORDER BY spacetime DESC';

  //echoer vha. funktionen seneste opslag
  print_data($conn, $query, '0', '0');
  echo ': ';
  print_data($conn, $query, '1', '0');
  echo '<br><br>';

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <a href="http://192.168.64.2/main/delete.php">Slet et opslag</a><br><br>
  </body>
</html>




 <?php
 logout();

  //sluk forbindelsen igen
  mysqli_close($conn);
   ?>
