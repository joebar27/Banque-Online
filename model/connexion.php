<?php 

$host = 'localhost';
$dbname = 'banque_php';
$user = "BanquePHP";
$password = "banque76";

try {
  // connection a la base de données
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  } catch (Exception $e) {
    // en cas de probleme on affiche un message
    echo "Erreur lors de la conenxion à la base de donée: " . $e->getMessage() . "<br/>";
    die();
  }

