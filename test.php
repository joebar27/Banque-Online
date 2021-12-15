<?php
require 'model/connexion.php';

// On récupère tout le contenu de la table customers
$sqlQuery = 'SELECT * FROM customers';
$customersStatement = $db->prepare($sqlQuery);
$customersStatement->execute();
$customers = $customersStatement->fetchAll();

foreach($customers as $customer){
?>
<p><?php echo $customer['login']; ?></p>
<?php
};
?>


// If the connexion form has been submited
if (!isset($_POST["identifiant"]) || empty($_POST['password'])) {
  // echo ('dscvskubhdjomqsifdg');
  include 'view/template/header.php';
  include 'view/template/nav.php';
  echo ('<h2>Vous n\'avez saisie aucun identifiant ou mot de passe');
  include 'view/loginView.php';
  include 'view/template/footer.php';
}
return;