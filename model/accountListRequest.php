<?php
require_once "pdoConnexion.php";
require_once 'model/class/account_class.php';

final class AccountList extends PdoConnexion
{
    public function getAccountList(Account $account)
    {
        // requete pour les comptes resumé a l'acceuil :
        $sql = "SELECT *
            FROM accounts a 
            WHERE a.customers_id = :user_id";
        $accountLists = $this->db->prepare($sql);
        $accountLists ->execute($_SESSION['user_id']);
        $accountList = $accountLists->fetch(PDO::FETCH_ASSOC);
        return $accountList;
    }
}



// a.id, typeAccount, firstname, lastname, accountNb, solde 