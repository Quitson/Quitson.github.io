<?php
  include '/opt/lampp/htdocs/main/misc/function.php';
  include '/opt/lampp/htdocs/main/connection/simple_conn.php';
  session_start();

// for at fjerne fejlmeddelelser
  ini_set('display_errors', 0); error_reporting(E_ERROR | E_WARNING | E_PARSE);

  echo 'Søg efter opslag<br><br>';
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <form action="" method="post">
      <input type="text" name="txt" placeholder="Search...">
      <input type="submit" name="search" value="Søg">
    </form>
  </body>
</html>

 <?php
$txt = $_POST['txt'];
$user = $_SESSION['user'];
$query = 'SELECT txt, spacetime FROM post WHERE txt LIKE "%'.$txt.'%" AND user="'.$user.'"';
$result = mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($result);

if (isset($_POST['search']) && $txt != "") {
  $_SESSION['len'] = $num_rows;
} else {
  $num_rows = 0;
}

if ($num_rows > 0) {
  $check_num = 1;
  echo '<form action="" method="post">';
  while ($row = mysqli_fetch_assoc($result)) {
    echo '
      <input type="checkbox" name="txt'.$check_num.'" value="'.$row["txt"].'">'. $row['spacetime'] . ' - ' . $row['txt'].'<br>';
    $check_num = $check_num + 1;
  }
  echo '<br><input type="submit" name="delete" value="Slet valgte">';
  echo '</form>';
}


if (isset($_POST['delete'])) {
  for ($i=0; $i < $_SESSION['len']; $i++) {
    $query = 'DELETE FROM post WHERE txt = "'.$_POST['txt'.$i].'"';
    mysqli_query($conn, $query);
  }
echo 'Opslag(ene) er nu slettet';
}

logout();
  //sluk forbindelsen igen
  mysqli_close($conn);
   ?>
