<?php
  function fetch_data ($db, $user, $col1, $col2) {
    $query = 'SELECT "'.$col1.'", "'.$col2.'" FROM "'.$db.'" WHERE user="'.$user.'"';
    $result = mysqli_query($conn, $query);
    $array = mysqli_fetch_assoc($result);
  }
 ?>
