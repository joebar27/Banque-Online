<?php
require 'model/connexion.php';
session_start();
    // var_dump($_SESSION['user']);

if (!empty($_SESSION['user_id'])) {
    include 'view/indexView.php';
} else {
    include 'view/loginView.php';
}

?>
