<?php
require 'model/connexion.php';

$user_id = $_SESSION['user_id'];

// requete pour les comptes resumé a l'acceuil :
$sqlList = "SELECT typeAccount, firstname, lastname, accountNb, solde FROM customers INNER JOIN accounts ON customers.id = accounts.customers_id WHERE customers_id = '$user_id'";
$accountLists = $db->prepare($sqlList);
$accountLists ->execute();
$accountList = $accountLists->fetchAll(PDO::FETCH_ASSOC);

// requete pour les comptes detaillé :
$sqldetail = "SELECT typeAccount, firstname, lastname, accountNb, solde FROM customers INNER JOIN accounts ON customers.id = accounts.customers_id WHERE customers_id = '$user_id'";
$accountDetails = $db->prepare($sqldetail);
$accountDetails ->execute();
$accountDetail = $accountDetails->fetchAll(PDO::FETCH_ASSOC);