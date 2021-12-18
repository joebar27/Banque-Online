<?php
include 'model/connexion.php';
include 'view/template/header.php';
include 'view/template/nav.php';

?>

<section id="popUp"></section>

<?php
echo('<h2 class="d-flex justify-content-center">
        Bienvenue sur vos compte : '
        . $_SESSION['user_sex'] . ' '
        . $_SESSION['user_firstname'] . ' '
        . $_SESSION['user_lastname'] . '</h2>'
    );
include 'view/accountListView.php';
?>

<?php include "view/template/footer.php"; ?>