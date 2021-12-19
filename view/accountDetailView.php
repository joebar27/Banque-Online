<?php
require 'accountDetail.php';
include_once "view/template/header.php";
include_once "view/template/nav.php";
?>


<h2 class="d-flex justify-content-center pt-5 pb-5 Voyages-1-hex">
    Voici votre compte en détail :
</h2>
<!-- <?php //print_r($details); ?> -->
<section class="d-flex col-12 justify-content-center">
<?php
foreach ($accountDetail as $accountD) {
    echo('<ul class="col-6 accountList">
        <li class="detailAccount">' . $accountD['typeAccount'] . '</li>
        <li class="detailAccount ms-5">Titulaire : ' . $accountD['firstname'] . '</li>
        <li class="detailAccount ms-5">Compte : ' . $accountD['accountNb'] . '</li>
        <li class="detailAccount ms-5">Date de création : ' . $accountD['createAccountDate'] . '</li>
        <li class="detailAccount ms-5">Solde actuel : ' . $accountD['solde'] . '</li>
        <li class="detailAccount ms-5">Transaction N° : ' . $accountD['dealNb'] . ' type : ' . $accountD['dealNb'] . '</li>
        <li class="detailAccount ms-5">Description : ' . $accountD['description'] . '</li>
        <li class="detailAccount ms-5">Transaction date : ' . $accountD['dealDate'] . '</li>
        <li class="detailAccount ms-5">Montant : ' . $accountD['amount'] . '</li>
    </ul>');
}
?>
</section>

<?php
include_once "view/template/footer.php";
?>