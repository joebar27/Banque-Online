<?php
require 'model/connexion.php';

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM customers';
$customersStatement = $db->prepare($sqlQuery);
$customersStatement->execute();
$customers = $customersStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($customers as $customer) {
?>
    <p><?php echo $customer['firstname']; ?></p>
<?php
}
?>



// Check for empty values (array filter removes empty values from array)
  $empty_values = array_filter($_POST);
  // If some values are empty
  if(count($empty_values) !== count($_POST)) {
    $error = "Vous devez remplir tous les champs pour vous connecter";
  }
  // Otherwise we try the connexion process
  else {
    // Sanitize the mail input, no htmlspecialchars because no displaying on the page
    $_POST["login"] = filter_var($_POST["login"]);
    // Search for a user according to the given email
    $user = get_user_by_login($db, $_POST);
    // If a user has been found
    if($user) {
      // Check the password and if it is correct log the user and go to home page
      if(password_verify($_POST["password"], $user["password"])) {
        session_start();
        $_SESSION["user"] = $user;
        header("Location: index.php");
        exit();
      }
    }
    // If one of the inputs does not match make an error message
    $error = "Identifiants incorrectes";
  }
}


require "view/loginView.php";