<?php
include_once 'view/template/header.php';
include_once 'view/template/nav.php';

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

include_once "view/template/footer.php"; ?>