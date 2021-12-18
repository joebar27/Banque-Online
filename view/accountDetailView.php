<?php
include_once "view/template/header.php";
include_once "view/template/nav.php";
?>

<h2 class="d-flex justify-content-center pt-5 pb-5 Voyages-1-hex">
    Voici votre compte en détail :
</h2>
<!-- <?php //print_r($details); ?> -->
<section class="d-flex col-12 justify-content-center">
    <ul class="col-6 accountList">
        <li class="detailAccount"> <?php echo($details['typeAccount']) ?> </li>
        <li class="detailAccount ms-5"> <?php echo("Titulaire : " . $_SESSION['user']) ?> </li>
        <li class="detailAccount ms-5"> <?php echo("Compte : " . $details['accountNb']) ?> </li>
        <li class="detailAccount ms-5"> <?php echo("Date de création : " . $details['createAccountDate']) ?> </li>
        <li class="detailAccount ms-5"> <?php echo("Solde actuel : " . $details['solde']) ?> </li>

<!-- foreach ($details as $k => $detail) {
    // print_r($details[$k] => $detail);
    // echo '<li class=\"detailAccount\">' . $detail[$detail] . '</li>';
    echo "$detail >>>>";    
} -->
</ul>
</section>

<?php
include_once "view/template/footer.php";
?>