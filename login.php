<?php
require "model/userLogin.php";

$ident = $_POST['identifiant'];
$password = $_POST['password'];


// If the connexion form has been submited
if(!isset($_POST["identifiant"]) || empty($_POST['password'])) {
  echo ('dscvskubhdjomqsifdg');
  return;
}
