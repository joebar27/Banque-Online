<?php
require "Data/acounts.php";
include "view/template/header.php";
include "view/template/nav.php";

$accounts = get_accounts();

?>

<section id="popUp"></section>

<?php  
include "view/loginView.php";
// include "test.php";
?>

<script src="js/popup.js"></script>
<script src="js/main.js"></script>

<?php include "view/template/footer.php"; ?>