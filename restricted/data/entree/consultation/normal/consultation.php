<?php
session_start();
$date=$_SESSION['exercice'];
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "andzoa";

$connect = mysqli_connect ($hostname,$username,$password,$databasename);
function categorie($connect)
{
  $output = '';
  $sql = "select * from categorie";
  $result = mysqli_query($connect,$sql);
  while($row=mysqli_fetch_array($result))
  {
    $output .='<option value="'.$row["categorieID"].'">'.$row["type"].'</option>';
    $type = $row["type"];
  }
  return $output;
}
if(isset($_SESSION['user_id']) && ($_SESSION['user_level']) && ($_SESSION['user_level']=="admin")) {
    ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>CONSULTATION</title>
    <link rel="stylesheet" href="../../../../styles/article.css">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    <ul>
    <li><a href="../../../../Projet.php">Home</a></li>
    <li><a  href="../../new.php">Nouveau</a></li>
    <li>
      <div class="ayy">
        <button class="ayybtn">Consultation</button>
        <div class="ayyctn">
            <a class="active2" href="consultation.php">Normal</a>
            <a href="../pack/consultation.php">Pacczoo</a>
        </div>
      </div>
      </li>
    <li style="float:right"><a class="active" href="about.asp">About</a></li>
    </ul>
    <link rel="stylesheet" href="../../../../styles/side.css">
        <div id="mySidenav" class="sidenav">
    <a href="../../entree.php" id="about">Entrées</a>
    <a href="../../../sortie/sortie.php" id="blog">Sorties</a>
<a href="../../../consultation/consultation.php" id="projects">Consultation</a>
    </div>
    <center>
          <div>
      <h1>SITUATION VIGNETTE <?= $date; ?> <h1>
        <select style="background-color:#eee;text-align-last:center;width:30%;height:30px;border:1px solid #6678b1;" id="categorieID" name="categorie">
              <option value="">Type de vignette</option>
              <?php echo categorie($connect) ?>
        </select>
      </div>
      <div id="result">
        <br>
        <h2>veuillez choisir un type</h2>
        <br>
      </div>
        <script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
      </center>
      <div class="terms">
      <p class="p1">ANDZOA - BNI OUAIL <script>document.write(new Date().getFullYear())</script></p>
      </div>
  </body>
</html>
<?php } elseif(isset($_SESSION['user_id']) && ($_SESSION['user_level']) && ($_SESSION['user_level']=="normal")) { ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title>CONSULTATION</title>
      <link rel="stylesheet" href="../../../../styles/article.css">
      <script src="jquery.js"></script>
      <script src="script.js"></script>
    </head>
    <body>
      <ul>
      <li><a href="../../../../Projet.php">Home</a></li>
      <li>
        <div class="ayy">
          <button class="ayybtn">Consultation</button>
          <div class="ayyctn">
              <a class="active2" href="consultation.php">Normal</a>
              <a href="../pack/consultation.php">Pacczoo</a>
          </div>
        </div>
        </li>
      <li style="float:right"><a class="active" href="about.asp">About</a></li>
      </ul>
      <link rel="stylesheet" href="../../../../styles/side.css">
          <div id="mySidenav" class="sidenav">
      <a href="../../entree.php" id="about" class="active1">Entrées</a>
      <a href="../../../sortie/sortie.php" id="blog">Sorties</a>
  <a href="../../../consultation/consultation.php" id="projects">Consultation</a>
      </div>
      <center>
            <div>
        <h1>SITUATION VIGNETTE <?= $date; ?> <h1>
          <select style="background-color:#eee;text-align-last:center;width:30%;height:30px;border:1px solid #6678b1;" id="categorieID" name="categorie">
                <option value="">Type de vignette</option>
                <?php echo categorie($connect) ?>
          </select>
        </div>
        <div id="result">
          <br>
          <h2>veuillez choisir un type</h2>
          <br>
        </div>
          <script type="text/javascript">
      var elems = document.getElementsByClassName('confirmation');
      var confirmIt = function (e) {
          if (!confirm('Are you sure?')) e.preventDefault();
      };
      for (var i = 0, l = elems.length; i < l; i++) {
          elems[i].addEventListener('click', confirmIt, false);
      }
  </script>
        </center>
        <div class="terms">
        <p class="p1">ANDZOA - BNI OUAIL <script>document.write(new Date().getFullYear())</script></p>
        </div>
    </body>
  </html>
  <?php } else { ?>
    <!DOCTYPE HTML>
    <HTML>
      <head>
        <meta charset="utf-8">
        <title>connection erreur</title>
        <link rel="stylesheet" href="../../../styles/index.css">
        <style type="text/css">
          input {font-weight:bold;
          font-size: 15px;}
       </style>
      </head>
      <body>
        <ul>
          <li><a  href="../../../Projet.php">Home</a></li>
          <li style="float:right"><a class="active" href="about.asp">About</a></li>
          <li style="float:right"><a class="active" href="../../.././login.php">Log in</a></li>
        </ul>
        <center>
          <br>
          <br>
        <img src="../../../images/andzoa.png">
    <center>
      <h1>vous n'avez pas d'autorisation !!</h1>
    <h2><a href="../../../../login.php">Identifiez vous ici !</a></h2>
    </center>
    <?php
    }
    ?>
