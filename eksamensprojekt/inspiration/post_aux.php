<?php
  include '/opt/lampp/htdocs/main/misc/function.php';
  include '/opt/lampp/htdocs/main/connection/simple_conn.php';
  session_start();

  $user = $_SESSION['user'];
  $txt = $_POST['txt'];
  $query = "INSERT INTO post (user, page, txt) VALUES ('$user', 'front', '$txt')";
  mysqli_query($conn, $query);
  unset($_POST['post']);

  header('Location: front.php');
  ?>

 <?php
  //sluk forbindelsen igen
  mysqli_close($conn);
   ?>
