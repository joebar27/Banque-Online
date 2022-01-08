<!-- CONTROLEUR DE LA PAGE DE DE-CONNECTION CLIENT -->
<?php
session_start();

if (isset($_SESSION['user_id'])){
    session_unset();
    session_destroy();
    include 'view/logoutView.php';
}