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
    <nav>
        <div class="nav-wrapper teal lighten-1">
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
            <div class="card red darken-1" style="padding: 20px;">
              <div class="card-image">
                <img src="images/PL_logo.png" style="padding: 40px;">
                <p class="card-title">Premier League odds calculation</p><br>
                <p class="card-content white-text" style="font-style: italic; margin-left: 10px;">Powered by Python</p>
              </div>

              <form action="" method="post">
                <div class="input-field col s12">
                  <select name="team_1">
                    <?php
                    if (isset($_POST['select'])) {
                      $_SESSION['team_1'] = $_POST['team_1'];

                      echo '<option value="" disabled selected>'.$_POST['team_1'].'.</option>';
                    } else {
                      echo '<option value="" disabled selected>Select position of highest positioned team</option>';
                    }
                    for ($i=1; $i < 20; $i++) {
                      echo "<option value=$i>$i.</option>";
                    } ?>
                  </select>
                  <label class="white-text">Team 1</label>
                  <button class="btn waves-effect waves-light red darken-3" style="margin-left: 10px;" type="submit" name="select">Select position
                   <i class="material-icons right">check</i>
                 </button>
                </div>
                </form>

                <form action="" method="post">
                  <div class="input-field col s12" style="margin-bottom: 50px;">
                    <select name="team_2">
                      <option value="" disabled selected>Select position of second team</option>
                      <?php if (isset($_POST['select'])) {
                        for ($j=$_POST['team_1'] + 1; $j < 21; $j++) {
                          echo "<option value=$j>$j.</option>";
                        }
                      } ?>
                    </select>
                    <label class="white-text">Team 2</label>
                    <button class="btn waves-effect waves-light red darken-3" style="margin-left: 10px;" type="submit" name="calc">Calculate odds
                     <i class="material-icons right">keyboard_return</i>
                    </button>
                  </div>
                </form>

      <?php if (isset($_POST['calc'])) {
        $myfile = fopen("stats_combined.txt", "r");
        $data = fread($myfile,filesize("stats_combined.txt"));
        fclose($myfile);

        $data = json_decode($data);
        $matches_number = $data[$_SESSION['team_1']][$_POST['team_2']][0]
                          + $data[$_SESSION['team_1']][$_POST['team_2']][1]
                          + $data[$_SESSION['team_1']][$_POST['team_2']][2];

       $winning = round($data[$_SESSION['team_1']][$_POST['team_2']][0]/$matches_number*100);
       $draw = round($data[$_SESSION['team_1']][$_POST['team_2']][1]/$matches_number*100);
       $losing = round($data[$_SESSION['team_1']][$_POST['team_2']][2]/$matches_number*100);

        echo '
        <div class="white-text" style="margin-left: 20px;">
            <p>First team winning odds: '.$winning.' %</p>
            <p>Draw odds: '.$draw.' %</p>
            <p>Second team winning odds: '.$losing.' %</p>
        </div>
        ';
      } ?>

             <p class="red-text">.</p>
            </div>
            </div>
          </div>
        </div>


    <script type="text/javascript">
      $(document).ready(function(){
      $('select').formSelect();
      });
    </script>

    <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

  </body>
</html>

<?php
logout_noform();

//sluk forbindelsen igen
mysqli_close($conn);
 ?>
