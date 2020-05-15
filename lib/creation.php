<?php
require('admin/ajout.php');
?>

<div class="container creation" id="creation">

 <h1> Espace création </h1>

 <p> Pour le moment, seuls les textes sont pris en compte, mais je travaille actuellement sur l'importation d'images et de documents </p>

 <h3> Voici le code qui vous permettra de retrouver vos informations :<span id="code"> <?php echo $code; ?> </span> </h3>


 <form action="<?php $_SERVER['PHP_SELF']; // le php self renvoie l'adresse de base sinon ça va ouvrir en _blank?>" method="POST">

  <div class="form-group">
   <label for="title"> Entrez un titre </label>
   <input type="text" id="title" name="title" placeholder="Titre .." required>
 </div>

   <textarea id="text" name="text" placeholder="Votre texte ici.." rows="10" cols="100" class="md-textarea form-contro"></textarea>


  <div class="form-group">
    <p class="infos"> J'accepte que les données rentrées soient stockés
 </p>
   <input type="checkbox" name="confirmation" id="confirmation" required checked></div>

  <div class="form-group">
   <button type="submit" class="btn btn-envoie"> Envoyer <i class="fas fa-lock in"></i> </button>
  <button type="reset" class="btn btn-envoie"> Effacer <i class="fas fa-eraser in"></i></button>
 </div>

</form>

</div>
