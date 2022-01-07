<?php
abstract class Connexion
{
    const HOST = 'localhost';
    const DBNAME = 'banque_php';
    const USER = "BanquePHP";
    const PASSWORD = "banque76";
    // private static ?PDO $db = null;

    public static function getDb()
    {
        try {
            // if (!self::$db) {
                // connection a la base de données
                $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // self::$db = $db;
            // }
            // return self::$db;
            return $db;
        } catch (Exception $e) {
            // en cas de probleme on affiche un message
            echo "Erreur lors de la conenxion à la base de donée: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
