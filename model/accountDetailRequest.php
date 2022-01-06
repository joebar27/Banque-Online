<?php
require 'model/connexion.php';
session_start();

$user_id = $_SESSION['user_id'];
$accountId = $_GET['id'];

// requete pour les comptes detaillé :
$sqldetail="SELECT firstname, lastname, typeAccount, accountNb, createAccountDate, solde, dealNb, dealType, description, dealDate, amount 
            FROM customers c 
            INNER JOIN deal d 
            ON c.id = d.customers_id 
            INNER JOIN accounts a 
            ON c.id = a.customers_id 
            WHERE a.customers_id = :user_id AND a.id = :accountId";

$accountDetails = $db->prepare($sqldetail);
$accountDetails ->execute(array(':user_id'=> $user_id, ':accountId'=> $accountId));
$accountDetail = $accountDetails->fetchAll(PDO::FETCH_ASSOC);


// WHERE a.customers_id = '$user_id' AND d.account_id = '$accountId'";
