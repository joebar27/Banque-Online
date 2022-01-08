<?php
require_once "model/pdoConnexion.php";
session_start();

// print_r($_SESSION['user_id']);

if (isset($_SESSION['user_id'])) {
    include 'view/indexView.php';
} else {
    include 'view/loginView.php';
}

?>
