<?php
require "Data/acounts.php";
include "view/template/header.php";
include "view/template/nav.php";

$compte = get_accounts();
$accountChoisses = $compte[$_GET["id"]];
echo "<h2 class=\"d-flex justify-content-center pt-5 pb-5 Voyages-1-hex\">Voici votre compte en détail :</h2><section class=\"d-flex col-12 justify-content-center\"><ul class=\"col-10 accountList\">";

foreach ($accountChoisses as $arg) {
    echo "<li class=\"detailAccount\"> $arg </li>";
}
echo "</ul></section>";

include "template/footer.php";

?>