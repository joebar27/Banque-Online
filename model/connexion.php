<?php 
try {
  // connection a la base de données
    $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
  } catch (Exception $e) {
    // en cas de probleme on affiche un message
    echo "Erreur lors de la conenxion à la base de donée: " . $e->getMessage() . "<br/>";
    die();
  }

