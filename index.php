<?php
require "Data/acounts.php";
include "template/header.php";
include "template/nav.php";

$accounts = get_accounts();

?>

<section id="popUp"></section>

<section class="d-flex col-12 flex-wrap justify-content-center pt-3 justify-content-md-around pt-md-5">

    <?php
    foreach ($accounts as $account) {
        echo "<ul class=\"account col-3\">";
        foreach ($account as $arg) {
            echo "<li class=\"detailAccount\"> $arg </li>";
        }
        echo "</ul>";
    }
    ?>

</section>

<script src="js/popup.js"></script>
<script src="js/main.js"></script>

<?php include "template/footer.php"; ?>