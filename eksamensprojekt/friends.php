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
          <a class="brand-logo center" href="http://oliv6757.elev.vtg.dk/Opgaver/eksamensprojekt/popular.php">Spacecook</a>
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


      <form class="col s12" method="post" action="">

            <div style="
            position: absolute;
            right: 200px;
            top:100px;
            width: 400px;
            padding: 10px;">

              <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="searchname">
                <label for="icon_prefix">First Name</label>
                </div>

              </div>

              <div style="
              position: absolute;
              right: 0px;
top: 100px;
              padding: 40px;">
              <button class="btn waves-effect waves-light" type="submit" name="search">Search
               <i class="material-icons right">send</i>
              </button>
            </div>
      </form>

      <p style="
      position: absolute;
      left: 350px;
      top: 80px;
      ">All Users</p>

      <p style="
      position: absolute;
      right: 500px;
      top: 80px;
      ">Search for User</p>


    <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
  </body>
</html>

<?php
//Sender tilbage til start, hvis man ikke har logget ind
logout_noform();

//det intastede bliver gemt i en variable
$searchname = $_POST['searchname'].'%';

//sql sætning køres og result bliver deffineret
$sqlq = "SELECT * FROM users WHERE username LIKE '$searchname'";
$result = mysqli_query($conn, $sqlq);

//Hvis submit isset, bliver alle results der er lig med søgningen.
if (isset($_POST['search'])) {

  if (mysqli_num_rows($result) > 0) {
  echo "<br><br><br><br><br>";
    while($row = mysqli_fetch_assoc($result)) {
      echo '<p style=" position: absolute; left: 1100px;">'.$row['username'].'</p><br>';
    }
  }
}

//sluk forbindelsen igen
mysqli_close($conn);
 ?>
