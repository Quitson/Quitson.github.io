<?php
session_start();
include 'connect.php';
include 'inspiration/function.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!--Page title -->
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
          <button class="btn waves-effect waves-light" type="submit" name="action">Log in
           <i class="material-icons right">send</i>
         </button>
         <a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/fgt_password.php" style="padding: 20px;">Forgot password?</a>
        </form>
    </div>

    <!-- New user -->
    <div class="new_user">
       <a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/new_user.php" class="btn-floating btn-large waves-effect"><i class="material-icons">add</i></a>
       <p>New user</p>
    </div>

    <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
  </body>
</html>

<?php
// when pressing log in and password != NULL
if (isset($_POST['action']) && $_POST['password'] != NULL) {
// declaring session user and getting password (fetch_data from 'fucntions.php')
  $_SESSION['user'] = $_POST['username'];
  $query = 'SELECT password FROM users WHERE username ="'.$_POST["username"].'"';
  $password = fetch_data($conn, $query, 0,0);

// checking for password and redirecting / displaying error message
  if ($password == $_POST['password']) {
    $_SESSION['logged_in'] = 1;
    header('Location: popular.php');
  } else {
    echo '<p class="center red-text">*Wrong username/password combination. Please try again*</p>';
  }
}
// hvis brugeren ikke har indtastet et password
if (isset($_POST['action']) && $_POST['password'] == NULL) {
  echo '<p class="center red-text">*Wrong username/password combination. Please try again*</p>';
}


//sluk forbindelsen igen
mysqli_close($conn);
 ?>
