<?php
require('admin/lecture.php');
?>

<div class="container consultation" id="consultation">

<h1> Consultation </h1>

<p> Pour consulter et récupérer vos données, veuillez entrer le code fournis </p>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

  <label for="entree"> Entrez votre code : </label>
  <input type="text" placeholder="*********" name="code" id="code" required>

  <button type="submit" class="btn btn-envoie">Envoyer <i class="fas fa-lock-open"></i> </button>

</form>


<h2> Voici vos informations : </h2>

<h4> Titre :  <?php echo $title; ?> </h4>

<h4> Message : <?php echo $message; ?> </h4>

<p> Vous pourrez bientôt modifier ou supprimer le contenu de votre texte </p>


</div>
