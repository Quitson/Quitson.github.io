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
      <!-- card row -->
      <div class="row">
    <!-- card 1st column -->
          <div class="col s12 m6">
            <div class="card red darken-2">
              <div class="white-text center" style="padding: 40px; font-size: 70px;">Premier League</div>
              <div class="card-image">
                <iframe src="https://www.bbc.com/sport/football/premier-league/table" style="width: 100%; height: 700px;"></iframe>
              </div>
              <div class="card-content white-text">
                <p style="font-style: italic;">Powered by BBC Sport</p>
              </div>
              <div class="card-action">
                <a href="https://www.bbc.com/sport/football/premier-league/table" class="white-text">Go to site</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card red darken-2">
              <div class="white-text center" style="padding: 40px; font-size: 70px;">La Liga</div>
              <div class="card-image">
                <iframe src="https://www.bbc.com/sport/football/spanish-la-liga/table" style="width: 100%; height: 700px;"></iframe>
              </div>
              <div class="card-content white-text">
                <p style="font-style: italic;">Powered by BBC Sport</p>
              </div>
              <div class="card-action">
                <a href="https://www.bbc.com/sport/football/spanish-la-liga/table" class="white-text">Go to site</a>
              </div>
            </div>
          </div>
        </div>

      <div class="row">
    <!-- card 1st column -->
          <div class="col s12 m6">
            <div class="card red darken-2">
              <div class="white-text center" style="padding: 40px; font-size: 70px;">Bundesliga</div>
              <div class="card-image">
                <iframe src="https://www.bbc.com/sport/football/german-bundesliga/table" style="width: 100%; height: 700px;"></iframe>
              </div>
              <div class="card-content white-text">
                <p style="font-style: italic;">Powered by BBC Sport</p>
              </div>
              <div class="card-action">
                <a href="https://www.bbc.com/sport/football/german-bundesliga/table" class="white-text">Go to site</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card red darken-2">
              <div class="white-text center" style="padding: 40px; font-size: 70px;">Serie A</div>
              <div class="card-image">
                <iframe src="https://www.bbc.com/sport/football/italian-serie-a/table" style="width: 100%; height: 700px;"></iframe>
              </div>
              <div class="card-content white-text">
                <p style="font-style: italic;">Powered by BBC Sport</p>
              </div>
              <div class="card-action">
                <a href="https://www.bbc.com/sport/football/italian-serie-a/table" class="white-text">Go to site</a>
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
//Sender tilbage til start, hvis man ikke har logget ind
logout_noform();

//sluk forbindelsen igen
mysqli_close($conn);
 ?>
