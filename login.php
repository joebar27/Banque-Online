<?php
require 'model/connexion.php';
session_start();

// Si tout les champs sont rempli:
if (isset($_POST['submit']) && (!empty($_POST['log']) && !empty($_POST['pass']))) {
    $log = htmlspecialchars($_POST['log']);
    $pass = htmlspecialchars($_POST['pass']);

    $sql = "SELECT * FROM customers where login = '$log'";
    $result = $db->prepare($sql);
    $result ->execute();
    $data = $result->fetchAll();
    
    // Si le champ login est trouver dans la base de donné :
    if ($result->rowCount() > 0) {
        if ($log === $data[0]["login"] && $pass === $data[0]["password"]) {
            $_SESSION['user_id'] = $data[0]['id'];
            $_SESSION['user_sex'] = $data[0]['sex'];
            $_SESSION['user_firstname'] = $data[0]['firstname'];
            $_SESSION['user_lastname'] = $data[0]['lastname'];
            include 'view/indexView.php';
        }
        if ($log === $data[0]["login"] && $pass !== $data[0]["password"]) {
            include 'view/loginErrorView.php';
        }
    } else {
        include 'view/unknownUserView.php';
    }

    // Si le champ de login n'est pas trouver dans la base de donné :
} else {
    include 'view/unknownUserView.php';
}
