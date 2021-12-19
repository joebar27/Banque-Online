<?php
require 'model/connexion.php';
session_start();

$user_id = $_SESSION['user_id'];
$accountId = $_GET['id'];

// requete pour les comptes detaillé :
$sqldetail = "SELECT firstname, lastname, typeAccount, accountNb, createAccountDate, solde, d.id, dealType, description, dealDate, amount FROM customers c INNER JOIN deal d ON c.id = d.customers_id INNER JOIN accounts a ON c.id = a.customers_id WHERE a.customers_id = '$user_id' AND a.id = '$accountId'";
$accountDetails = $db->prepare($sqldetail);
$accountDetails ->execute();
$accountDetail = $accountDetails->fetchAll(PDO::FETCH_ASSOC);


include_once "view/template/header.php";
include_once "view/template/nav.php";
?>


<h2 class="d-flex justify-content-center pt-5 pb-5 Voyages-1-hex">
    Voici votre compte en détail :
</h2>

<?php
echo('<section class="d-flex col-12 justify-content-center">
    <ul class="col-10 col-lg-6 accountList-detail d-flex flex-wrap justify-content-center">
        <li class="detailAccount col-12 m-0">' . $accountDetail[0]['typeAccount'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0"> Titulaire : ' . $accountDetail[0]['firstname'] . ' ' . $accountDetail[0]['lastname'] .'</li>
        <li class="detailAccount d-flex justify-content-center col-12 col-lg-3 m-0"> Compte : ' . $accountDetail[0]['accountNb'] . '</li>
        <li class="detailAccount d-flex justify-content-center col-12 col-lg-3 m-0"> Date de création : ' . $accountDetail[0]['createAccountDate'] . '</li>
        <li class="detailAccount d-flex justify-content-center col-12 col-lg-3 m-0"> Solde actuel : ' . $accountDetail[0]['solde'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">--------------------------------------------------------------</li>'

    );
foreach ($accountDetail as $accountD) {
    echo('
        <li class="detailAccount col-12 d-flex justify-content-center m-0">--------------------------------------------------------------</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">Transaction N° : ' . $accountD['d.id'] . ' type : ' . $accountD['dealType'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">Description : ' . $accountD['description'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">Transaction date : ' . $accountD['dealDate'] . '</li>
        <li class="detailAccount col-12 d-flex justify-content-center m-0">Montant : ' . $accountD['amount'] . '</li>'
    );
}
echo('</ul>');
?>
</section>

<?php
include_once "view/template/footer.php";
?>