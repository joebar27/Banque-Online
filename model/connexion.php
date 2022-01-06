<?php 
abstract class connection {
  const HOST = 'localhost';
  const DBNAME = 'banque_php';
  const USER = "BanquePHP";
  const PASSWORD = "banque76";

  static public function getDb(){
      try {
          // connection a la base de données
          $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
          return $db;
      } catch (Exception $e) {
          // en cas de probleme on affiche un message
          echo "Erreur lors de la conenxion à la base de donée: " . $e->getMessage() . "<br/>";
          die();
      }
  }
}