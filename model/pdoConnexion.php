<?php
require "connexion.php";

abstract class PdoConnexion
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = Connexion::getDb();
    }
}
