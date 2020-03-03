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
          <form class="right" action="" method="post" style="padding-right: 20px; padding-left: 20px;">
            <button class="btn waves-effect waves-light" type="submit" name="logout">Log out
           </button>
              </form>
          <a class="brand-logo center">Spacecook</a>
          <ul id="nav-mobile" class="right">
            <li><a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/about.php">About</a></li>
            <li><a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/faq.php">FAQ</a></li>
            <li><a href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/help_and_support.php">Help and support</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <h5 class="page_content">Account details</h5><br>
  <div class="page_content">
    <details>
      <summary>Show username and password</summary>
      <?php
      $query = 'SELECT password FROM users WHERE username ="'.$_SESSION["user"].'"';
      $password = fetch_data($conn, $query, 0,0);

      echo "Username: " . $_SESSION['user']. "<br> Password: " . $password; ?>
    </details>
  </div>

<div class="page_content">
  <formclass="col s12" action="" method="post">
    <button class="btn waves-effect waves-light" type="submit" name="change">Change password</button>
</form>
</div>

  <?php
  if (isset($_POST['change'])){
  echo "<h3 class='page_content'> fuck </h3>";
  }
  ?>


    <!-- side navigation -->
    <ul class="sidenav sidenav-fixed teal lighten-1">
      <li><img class="circle" style="width: 220px; height: 220px; padding: 20px;" src="https://images.unsplash.com/photo-1523895665936-7bfe172b757d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"></li>
      <li><a href="popular.php" class="white-text">Popular</a></li>
      <li><a href="friends.php" class="white-text">Friends</a></li>
      <li><a href="leagues.php" class="white-text">Leagues</a></li>
      <li><a href="betting.php" class="white-text">Betting</a></li>
      <li><div class="divider"></div></li><br><br>
      <li><a href="profile.php" class="white-text">Profile</a></li>
      <li><a href="account.php" class="white-text">Account</a></li>
    </ul>

    <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
  </body>



</html>

<?php
//Sender tilbage til start, hvis man ikke har logget ind
logout_noform();

//sluk forbindelsen igen
mysqli_close($conn);
 ?>
