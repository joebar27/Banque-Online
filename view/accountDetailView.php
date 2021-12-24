<?php
include_once "view/template/header.php";
include_once "view/template/nav.php";

echo('<h2 class="d-flex justify-content-center pt-5 pb-5 Voyages-1-hex">
    Voici votre compte en détail :
    </h2>
    <section class="d-flex col-12 justify-content-center">
    <ul class="col-10 col-lg-6 accountList-detail d-flex flex-wrap justify-content-center">
        <li class="detailAccount col-12 m-0">' . $accountDetail[0]['typeAccount'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0"> Titulaire : ' . $accountDetail[0]['firstname'] . ' ' . $accountDetail[0]['lastname'] .'</li>
        <li class="detailAccount d-flex justify-content-center col-12 col-lg-3 m-0"> Compte : ' . $accountDetail[0]['accountNb'] . '</li>
        <li class="detailAccount d-flex justify-content-center col-12 col-lg-3 m-0"> Date de création : ' . $accountDetail[0]['createAccountDate'] . '</li>
        <li class="detailAccount d-flex justify-content-center col-12 col-lg-3 m-0"> Solde actuel : ' . $accountDetail[0]['solde'] . ' €</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">--------------------------------------------------------------</li>'

);
var_dump($accountId);
foreach ($accountDetail as $accountD) {
    echo('
        <li class="detailAccount col-12 d-flex justify-content-center m-0">--------------------------------------------------------------</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">Transaction N° : ' . $accountD['dealNb'] . ' type : ' . $accountD['dealType'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">Description : ' . $accountD['description'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">Transaction date : ' . $accountD['dealDate'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">Montant : ' . $accountD['amount'] . '</li>'
    );
}
echo('</ul></section>');

include_once "view/template/footer.php";
?>