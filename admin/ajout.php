<?php
$error = $title = $message = $confirmation = $code =  "";
$isSuccess = false;

  if(!empty($_POST)) {
    $isSuccess = true;
    $title = htmlspecialchars($_POST["title"]);
    $message = htmlspecialchars($_POST["text"]);
    $confirmation = htmlspecialchars($_POST["confirmation"]);

  }

  if(empty($title)) {
    $isSuccess = false;
    $error = "Erreur, le titre est obligatoire";
  }
  if(empty($message)) {
    $isSuccess = false;
    $error = "Erreur, le message est obligatoire";
  }
  if(empty($confirmation)) {
    $isSuccess = false;
    $error = "Erreur, la confirmation est obligatoire";
  }

  if($isSuccess){

    // Création du code
    $bytes = random_bytes(6);
    $codeEnvoie = bin2hex($bytes);
    // Envoie dans la base de données
    try {
      $db = new PDO("mysql:host=localhost;dbname=secret", "root", "root");
    } catch(Exception $e) {
      die($e->getMessage());
    }

    $envoie = $db->prepare('INSERT INTO secretentre (title,message,code) VALUES(?,?,?)');

    $envoie->execute(array(crypter($title),crypter($message),$codeEnvoie));


  }


function crypter($var) { // Function qui va crypter les entrées
  $key_password = "fc1c904ecaad8ea88dba22118cd1fd542108a990cd70faec2efe6ce665f8396a";
  $encrypted_chaine = openssl_encrypt($var, "AES-256-CTR" ,$key_password);
  return $encrypted_chaine;
}

?>
