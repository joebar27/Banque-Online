<!-- CONTROLEUR DE LA PAGE DE CONNECTION CLIENT -->
<?php
require 'model/class/customers_class.php';
require 'model/userLogin.php';
session_start();

// Si tout les champs sont rempli:
if (isset($_POST['submit']) && (!empty($_POST['login']) && !empty($_POST['password']))) {
    
    try {
        $userlog = new Customer($_POST);
        $login = new UserLogin();
        $userbdd = $login->getUserByLogin($userlog);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
    
    // Si le champ login est trouver dans la base de donné :
    if ($userbdd) {
        // print_r($userlog->getLogin() . $userlog->getPassword());
        print_r($userbdd);
        // print_r($login);
        if ($userlog->getLogin() === $userbdd['login'] && $userlog->getPassword() === $userbdd['password']) {
            $_SESSION['user_id'] = $userbdd['id'];
            $_SESSION['user_sex'] = $userbdd['sex'];
            $_SESSION['user_firstname'] = $userbdd['firstname'];
            $_SESSION['user_lastname'] = $userbdd['lastname'];
            include 'view/indexView.php';
        }
        if ($userlog->getLogin() === $userbdd['login'] && $userlog->getPassword() !== $userbdd['password']) {
            include 'view/loginErrorView.php';
        }
    } else {
        include 'view/unknownUserView.php';
    }

    // Si le champ de login n'est pas trouver dans la base de donné :
} else {
    include 'view/unknownUserView.php';

}
