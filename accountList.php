<!-- CONTROLEUR DE LA LISTE DES COMPTES CLIENT -->

<?php
require_once 'model/accountListRequest.php';
require_once 'model/class/account_class.php';

$account = new Account();
$bddAccount = new AccountList();
$dataAccount = $bddAccount->getAccountList($_SESSION['user_id']);
// print_r($_SESSION);
// print_r($account);
// print_r($accountList);
print_r($bddAccount);
var_dump($dataAccount);
// include 'view/accountListView.php';

// a.id, typeAccount, firstname, lastname, accountNb, solde 

// include_once 'view/accountListView.php';


?>