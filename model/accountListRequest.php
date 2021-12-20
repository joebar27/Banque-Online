<?php
$user_id = $_SESSION['user_id'];

// requete pour les comptes resumé a l'acceuil :
$sqlList = "SELECT a.id, typeAccount, firstname, lastname, accountNb, solde FROM customers c INNER JOIN accounts a ON c.id = a.customers_id WHERE customers_id = '$user_id'";
$accountLists = $db->prepare($sqlList);
$accountLists ->execute();
$accountList = $accountLists->fetchAll(PDO::FETCH_ASSOC);
