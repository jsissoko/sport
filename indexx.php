
  
  <?php 
  // Introduction : Vous pouvez vous aider de vos documents vue en cours et d'internet
  // Une fois terminé, envoyer le dossier renommer TP_nom_prenom à l'adresse : m.mavrodis@gmail.com


  //Exercice 1 - point 1
  //Créer une fonction qui permet d'additionner deux arguments et retourne le résultat
  echo '<br>';
function plus( $a , $b ) {
  echo $a + $b;};

  plus(17,765);


  //Exercice 2 - point 1
  //Créer une fonction qui permet d'afficher la date d'aujourd'hui
  echo '<br>';


  $date = new DateTime();
  echo $date->format('d/m/Y H:i:s');

  //Exercice 3 - point 3 
  //Créer une fonction qui permet d'afficher une plage de multiplication avec 2 arguments (ex : arg1=4, arg2=7 permet d'afficher les tables de 4 à 7)
  //Attention : faite les contrôles si jamais l'argument 2 est plus petit que l'argument 1
  echo '<br>';

  function afficher($arg1, $arg2){
    for ($a = 1; $a <= 10; $a++) {
        $result1 = $arg1 * $a;
        $result2 = $arg2 * $a;
        echo "Table de multiplication pour $arg1 : $arg1 x $a = $result1<br>";
        echo "Table de multiplication pour $arg2 : $arg2 x $a = $result2<br>";
    }
}

afficher(1, 8);
//


  //Exercice 4 - point 3
  //Créer un formulaire comportant 3 champs input de type "text" et un champ type "submit"
  //Le formulaire doit permettre additionner, soustraire ou multiplier les données envoyer dans le formulaire
  //Deux champs de valeurs et un champ qui permet de choisir entre '-', '+', '*'  
  //Afficher le résultat sur la même page
  //Attention : faite bien les contrôles de vérification des champs s'ils sont bien saisies
  echo '<br>';

     

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!isset($_POST["number1"], $_POST["number2"], $_POST["choice"])) {
        die("Tous les champs sont obligatoires.");
    }

    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $choice = $_POST["choice"];

    $res = 0;

    switch ($choice) {
        case 1:
            $res = ($number1 + $number2);
            break;

        case 2:
            $res = ($number1* $number2); 
            break;

        case 3:
            $res = ($number1 - $number2); 
            break;

        default:
            die("Choix invalide.");
    }

    echo "Le résultat est : $res";
}  
  //Exercice 5 - point 2
  //Créer deux pages dans un dossier "layout"
  //La première page "header.php"
  //La deuxième page "footer.php"
  //Faite en sorte de mettre le menu dans la page "header" et utiliser le require ou include dans les pages
  //Faite en sorte de mettre le pied de page dans la page "footer" et utiliser le require ou include dans les pages

    include('layout/head.php');
    include('layout/footer.php');


  //Exercice 6 - point 3 
  //Récupérer les données envoyées en GET : ?nom=Dupont&prenom=Michel&age=20
  //Attention : faite bien les contrôles de vérification des champs s'ils sont bien saisies
  echo '<br>';

  if (!isset($_GET["nom"], $_GET["prenom"], $_GET["age"]) || empty(trim($_GET["nom"])) || empty(trim($_GET["prenom"])) || empty(trim($_GET["age"]))) {
    echo "Des données sont manquantes.";
} else {
    echo "Les données ont été transmises.";
}



  //Exercice 7 - point 7
  //Créer un formulaire qui prend exemple au lien suivant : https://arcanum.paris/user/new
  //Afficher les données saisies sur la page
  //Ne pas prendre en compte le champ des numéros indicatif téléphonique, civilité et du design

  //Attention : faite bien les contrôles de vérification des champs s'ils sont bien saisies

  // Mot de passe
  //   Faire au moins 8 caractères
  //   Avoir au moins 1 chiffre
  //   Avoir au moins une majuscule et une minuscule
  //Email
  //  Vérifier qu'il y a un '@' et '.fr, .com'
  //Telephone
  //  Vérifier qu'il n'y a que des chiffres
  //  Vérifier que la taille minimum maximum est 10 chiffres
  ;echo '<br>';

  ?>

<form action="" method="post">
    <input type="text" name="prenom" id="prenom">
    <label for="prenom">Prénom</label>

    <input type="text" name="nom" id="nom">
    <label for="nom">Nom</label><br><br>

    <input type="email" name="email" id="email">
    <label for="email">Email</label>

    <input type="password" name="password" id="password">
    <label for="password">Mot de passe</label>

    <input type="submit" value="Envoyer">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $regex= "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[a-zA-Z0-9]{8,14}$/";
    $regexemail = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/';

var_dump($_POST);

    if (!preg_match($regex, $password)) {
      echo "Le mot de passe ne satisfait pas les critères.";
      die;
  }

    if (!preg_match($regexemail, $email)) {
     echo "Le mail ne satisfait pas les critères.";
     die;

     
  } 
}


?>
 </form>

</body>
</html>