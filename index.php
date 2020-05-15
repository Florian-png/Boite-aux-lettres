<!DOCTYPE html>
<html>
<head>

    <title> Boîte aux lettre sécurisé </title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Manrope&display=swap" rel="stylesheet">

</head>

<body>

<div class="jumbotron jumbotron-fluid bodycover text-center stop-scrolling" id="bodycover">

  <!-- Import de la navbar quand elle sera dispo - FAIRE UN INNERHTML DU LIEN -->

  <h1 class="title"> E-SEC, VOTRE BOITE AUX LETTRES SECURISE </h1>

  <h2 class="cover"> Bénéficier d'un service de stockage crypté dont vous seul avez accès </h2>

  <h3 class="cover"> Profiter gratuitement et à tout moment de vos informations </h3>

    <button class="btn btn-primary text-center btn-go" id="btn" onclick="nav()"><a href="#qui" class="link"> Commencer</a> </button>

</div>

<div class="container" id="form-2">

    <form action="index.php" method="GET" id="form" class="form"> <!-- voir form-hid -->

<div class="row justify-content-center no-gutters ">


    <div class="col-lg-6 fm0 text-center">
      <h3 class="h3-form"> Création </h3>
      <p class="sub"> C'est ici que vous pourrez créer vos fichiers sécurisé <br>
        Crypté à l'envoie et au retour </p>

      <input type="checkbox" name="creer" id="creer">
      <p class="text-attention"><i> Je rappelle que ce projet est à but éducatif, ne stocker donc aucune informations confidentielles ou importante.</i> </p>

    </div>

  <div class="col-lg-6 fm1"> </div>

</div>



<div class="row justify-content-center no-gutters ">

  <div class="col-lg-6 fm2"> </div>
    <div class="col-lg-6 fm text-center">
        <h3 class="h3-form"> Consultation </h3>
        <p class="sub"> C'est ici que vous pourrez consulter vos fichiers sécurisé <br>
          Accessibles 24h/24 et 7jours/7 </p>

      <input type="checkbox" name="consulter" id="consulter">
      <p class="text-attention"><i> Je rappelle que ce projet est à but éducatif, ne stocker donc aucune informations confidentielles ou importante.</i> </p>

    </div>

  </div>
    </form>
    <div class="text-center">
      <button class="btn btn-success btn-submit text-center" onclick="show()" id="btn-2"> Continuer </button>
    </div>


</div>

<?php
require('lib/creation.php');
require('lib/consultation.php');
require("lib/footer.php");
?>

  <!-- Ajout du footer quand il sera créé -->
      <script type='text/javascript' src='js/script.js'></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/3f20d1dcb8.js" crossorigin="anonymous"></script>

</body>
</html>
