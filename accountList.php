<?php
require_once 'model/accountListRequest.php';

$account = new Account();
$bddAccount = new AccountList();
$dataAccount = $bddAccount->getAccountList($_SESSION['user_id']);
print_r($accountList);
print_r($bddAccount);
// var_dump($dataAccount);
// include 'view/accountListView.php';

?>