<?php
include '/opt/lampp/htdocs/main/misc/function.php';
include '/opt/lampp/htdocs/main/connection/simple_conn.php';
session_start();
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <form action="" method="post">
      <input type="text" name="username" placeholder="New username"><br>
      <input type="password" name="password" placeholder="New password"><br>
      <input type="password" name="password_con" placeholder="Confirm password"><br>
      <input type="submit" name="submit" value="Create new user"><br>
    </form>
  </body>
</html>

 <?php
if (isset($_POST['submit']) && $_POST['password'] == $_POST['password_con']) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
  mysqli_query($conn, $query);

  $query = "INSERT INTO admin_table (username, admin) VALUES ('$username', '0')";
  mysqli_query($conn, $query);

  header('Location: login.php');
}

  //sluk forbindelsen igen
  mysqli_close($conn);
   ?>
