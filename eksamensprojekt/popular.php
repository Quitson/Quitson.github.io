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
<nav class="nav-wrapper teal lighten-1">
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
</nav>

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

<!-- div for page content -->
<div class="page_content">
  <!-- cards -->
    <div class="row">
      <div class="col s12 m7">
        <div class="card red darken-2">
          <div class="card-image">
            <img src="https://www.bigstockphoto.com/images/homepage/module-6.jpg">
            <span class="card-title">Tree</span>
          </div>
          <div class="card-content white-text">
            <p>Here's a picture of a tree</p>
          </div>
          <div class="card-action">
            <a href="#" class="white-text">Go to Tree's profile</a>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="page_content">
  <div class="row">
    <div class="col s12 m7">
      <div class="card red darken-2">
        <div class="card-image">
          <img src="https://www.bigstockphoto.com/images/homepage/module-6.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content white-text">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#" class="white-text">This is a link</a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
  </body>
</html>

<?php
//Sender tilbage til start, hvis man ikke har logget ind (fra 'functions.php')
logout_noform();

//sluk forbindelsen igen
mysqli_close($conn);
 ?>
