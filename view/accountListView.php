<!-- VIEWER DE LA LISTE DES COMPTES CLIENT -->
<?php
include_once "view/template/header.php";
include_once "view/template/nav.php";
?>

<section class="d-flex col-12 flex-wrap justify-content-center pt-3 pb-4 justify-content-md-around pt-md-5">

    <?php
        // var_dump($accountList);

        $i = 1;
        foreach ($accountList as $account) {
            echo('<a class="account col-8 col-lg-3" href="accountDetail.php?id=' . $account['id'] . '"><ul class="accountList">');
            $i ++;
            echo('<li class="detailAccount">' . $account['typeAccount'] . '</li>
                <li class="detailAccount">Titulaire : ' . $account['firstname'] . $account['lastname'] . '</li>
                <li class="detailAccount">N° compte : ' . $account['accountNb'] . '</li>
                <li class="detailAccount">Solde actuel : ' . $account['solde'] . '</li>
                </ul></a>');
        }
    ?>

</section>

<?php 
include_once "view/template/footer.php"; 
?>