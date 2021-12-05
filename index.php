<?php
require "Data/acounts.php";
include "template/header.php";
include "template/nav.php";

$accounts = get_accounts();

?>

<section id="popUp"></section>

<section class="d-flex col-12 flex-wrap justify-content-center pt-3 pb-4 justify-content-md-around pt-md-5">

    <?php
    foreach ($accounts as $Key => $account) {
        $id = $Key;
        echo "<a class=\"account col-8 col-lg-5 mt-lg-5\" href=\"compte.php?id=" . $id . "\"><ul class=\"accountList\">";
        foreach ($account as $arg) {
            echo "<li class=\"detailAccount\">$arg</li>";
        }
        echo "</ul></a>";
    }
    ?>

</section>

<script src="js/popup.js"></script>
<script src="js/main.js"></script>

<?php include "template/footer.php"; ?>