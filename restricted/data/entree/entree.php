<?php

  include('../../connect.php');

  ?>
<?php
  session_start();
$date=$_SESSION['exercice'];
  if(isset($_SESSION['user_id']) && ($_SESSION['user_level']) && ($_SESSION['user_level']=="admin")) {
  ?>
<!DOCTYPE HTML>
<HTML>
  <head>
    <meta charset="utf-8">
    <title>Type de Vignette</title>
    <link rel="stylesheet" href="../../styles/styles1.css">
    <link rel="stylesheet" href="../../styles/side.css">
  </head>
  <body>
    <ul>
  <li><a  href="../../Projet.php">Home</a></li>
  <li><a  href="new.php">Nouveau</a></li>
  <li><a  href="consult.php">Consultation</a></li>
  <li style="float:right"><a class="active" href="about.asp">About</a></li>
    </ul>
    <div id="mySidenav" class="sidenav">
<a class="active1" href="#" id="about">Entrées</a>
<a href="../sortie/sortie.php" id="blog">Sorties</a>
<a href="../consultation/consultation.php" id="projects">Consultation</a>
</div>
    <center>
      <h1>Les Entrées</h1>
      <br>
    <form action="new.php" method="post">
        <button class="dropdown" type="submit"><span>Enregistrement des entrées</span></button>
    </form>
    <br>
    <form action="consult.php" method="post">
      <button class="dropdown" type="submit"><span>Consultation des entrées</span></button>
    </form>
    </center>
    <div class="terms">
    <p class="p1">ANDZOA - BNI OUAIL <script>document.write(new Date().getFullYear())</script></p>
    </div>
  </body>
</html>
<?php } elseif(isset($_SESSION['user_id']) && ($_SESSION['user_level']) && ($_SESSION['user_level']=="normal")) { ?>
  <!DOCTYPE HTML>
  <HTML>
    <head>
      <meta charset="utf-8">
      <title>Type de Vignette</title>
      <link rel="stylesheet" href="../../styles/styles1.css">
      <link rel="stylesheet" href="../../styles/side.css">
    </head>
    <body>
      <ul>
    <li><a  href="../../Projet.php">Home</a></li>
    <li><a  href="consult.php">Consultation</a></li>
    <li style="float:right"><a class="active" href="about.asp">About</a></li>
      </ul>
      <div id="mySidenav" class="sidenav">
  <a class="active1" href="#" id="about">Entrées</a>
  <a href="../sortie/sortie.php" id="blog">Sorties</a>
  <a href="../consultation/consultation.php" id="projects">Consultation</a>
  </div>
      <center>
        <h1>Les Entrées</h1>
        <br>
      <form action="consult.php" method="post">
        <button class="dropdown" type="submit"><span>Consultation des entrées</span></button>
      </form>
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
      <link rel="stylesheet" href="../../styles/index.css">
      <style type="text/css">
        input {font-weight:bold;
        font-size: 15px;}
     </style>
    </head>
    <body>
      <ul>
        <li><a  href="../../../Projet.php">Home</a></li>
        <li style="float:right"><a class="active" href="about.asp">About</a></li>
        <li style="float:right"><a class="active" href="../../../login.php">Log in</a></li>
      </ul>
      <center>
        <br>
        <br>
      <img src="../../images/andzoa.png">
  <center>
    <h1>vous n'avez pas d'autorisation !!</h1>
  <h2><a href="../../../login.php">Identifiez vous ici !</a></h2>
  </center>
  <?php
  }
  ?>
