<?php
session_start();
include 'connect.php';
include 'inspiration/function.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Spacecook</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"></link>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>
      <!--Import jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

  <body>
<!--Navigation bar -->
    <nav class="teal lighten-1">
      <div>
        <div class="nav-wrapper">
          <a class="brand-logo center">Spacecook</a>
          <ul id="nav-mobile" class="right">
            <li><a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/about.php">About</a></li>
            <li><a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/faq.php">FAQ</a></li>
            <li><a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/help_and_support.php">Help and support</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--User input -->
    <div class="userinput">
        <form class="col s12" action="" method="post">
            <div class="input-field col s6">
              <input id="input_text" name="username" type="text"><br>
              <label for="input_text">Username</label>
            </div>
            <div class="input-field col s6">
              <input id="password" name="password" type="password">
              <label for="password">Password</label>
            </div>
            <div class="input-field col s6">
              <input id="confirm_password" name="confirm_password" type="password">
              <label for="confirm_password">Confirm password</label>
            </div>
          <button class="btn waves-effect waves-light" type="submit" name="action">Create new user
           <i class="material-icons right">add</i>
         </button>
        </form>
    </div>

    <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
  </body>
</html>

<?php
if (isset($_POST['action'])) {
  if ($_POST['password'] == $_POST['confirm_password']) {
    //checking for existing users
    $query = 'SELECT username FROM users';
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['username'] == $_POST['username']) {
        mysqli_close($conn);
      }
    }

  //inserting into user table
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password, admin) VALUES ('$username', '$password', '0')";
    mysqli_query($conn, $query);

    header('Location: login.php');
  } else {
  echo '<p class="center red-text">*Something went wrong. Please try again*</p>';
  }
}

?>

<div class="new_user">
   <a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/login.php" class="waves-effect waves-light btn-small">Go back</a>
</div>

<?php
//sluk forbindelsen igen
mysqli_close($conn);
 ?>
