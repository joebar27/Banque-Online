<?php
require 'model/connexion.php';
session_start();

if(!isset($_SESSION["user"])) {
include 'view'
}
include "view/indexView.php";
?>