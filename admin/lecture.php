<?php
$error = "";

if(!empty($_POST)) {
    $isSuccess = true;
    $code = htmlspecialchars($_POST['code']);
}

if(empty($code)){
  $isSuccess = false;
  $error = "Le code entré n'est pas valide";
}

try {

    $db = new PDO("mysql:host=localhost;dbname=secret", "root", "root");

}catch(Exception $e){
  die($e->getMessage());
}


$requete = $db->prepare('SELECT title,message,code from secretentre WHERE code = ?');
$requete->execute(array($code));

while($donne = $requete->fetchAll()) {
  foreach($donne as $resultat) {
    $title = decrypt($resultat['title']);
    $message = decrypt($resultat['message']);

  }
}

function decrypt($var){
  $key_password = "fc1c904ecaad8ea88dba22118cd1fd542108a990cd70faec2efe6ce665f8396a";
  $decrypted_chaine = openssl_decrypt($var, "AES-256-CTR" ,$key_password);
  return $decrypted_chaine;
}




?>
