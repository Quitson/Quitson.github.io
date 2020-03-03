<?php
  function fetch_data($conn, $query, $x, $y) {
    $result = mysqli_query($conn, $query);
    mysqli_data_seek($result, $y);
    $row = mysqli_fetch_row($result);
    return($row[$x]);
  }

  function logout(){
  echo '<br><br><form action="" method="post">
        <input type="submit" name="logout" value="Log ud">
      </form>';

  if (isset($_POST['logout'])) {
    $_SESSION['logged_in'] = 0;
    }

  if ($_SESSION['logged_in'] !== 1) {
      header('Location: login.php');
    }
}

  function logout_noform(){
  if (isset($_POST['logout'])) {
    $_SESSION['logged_in'] = 0;
    }

  if ($_SESSION['logged_in'] !== 1) {
      header('Location: login.php');
    }
  }
 ?>
