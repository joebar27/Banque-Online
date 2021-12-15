<?php
include 'model/connexion.php';

if (isset($_POST['submit']) && (!empty($_POST['log']) && !empty($_POST['pass'])) ) {
    $log = $_POST['log'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM customers where login = '$log' AND password = '$pass' ";
    $result = $db->prepare($sql);
    $result ->execute();
  
    if ($result->rowCount() > 0) {
      echo "tout est ok";
    } else {
        // $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO customers (login, password) VALUES ('$log','$pass')";
        $req = $db->prepare($sql);
        $req ->execute();
        echo "Enregistrement effectué";
    }
}
else {
  echo "manque des champs remplie";
}
