<?php
require_once "pdoConnexion.php";
// require 'class/customers_class.php';

final class UserLogin extends PdoConnexion
{
    public function getUserByLogin(Customer $customer)
    {
        $sql = "SELECT * FROM customers WHERE login = :login";
        $query = $this->db->prepare($sql);
        $query->execute(["login" => $customer->getLogin()]);
        $userlogin = $query->Fetch(PDO::FETCH_CLASS);
        return $userlogin;
    }
}
