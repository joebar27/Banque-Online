<?php
require_once "model/pdoConnexion.php";
session_start();

if (isset($_SESSION['user_id'])) {
    include 'view/indexView.php';
} else {
    include 'view/loginView.php';
}

?>
