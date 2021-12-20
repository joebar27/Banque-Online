<?php
include "view/template/header.php";
include "view/template/nav.php";

// var_dump($i);
echo('
<section class="d-flex flex-wrap justify-content-center">
    <h2 class="d-flex col-12 text-center fs-3 justify-content-center py-3 Voyages-1-hex"> 
        Vous etes sur le point de créer un Compte Bancaire
    </h2>
    <form class="d-flex flex-wrap justify-content-center col-5 creAcount" action="" method="POST">
        <label class="col-10" for="name">Nom :
            <input class="d-flex col-10 p-2 fs-5 inputCreaAcount" type="text" name="name" id="name" placeholder="Nom *">
        </label>
        <label class="col-10" for="lastname">Prénom :
            <input class="d-flex col-10 p-2 fs-5 inputCreaAcount" type="text" name="lastname" id="lastname" placeholder="Prénom *">
        </label>
        <label class="col-10" for="accountName">Intitulé du compte :
            <input class="d-flex col-10 p-2 fs-5 inputCreaAcount" type="text" name="accountName" id="accountName" placeholder="Intitulé du compte *">
        </label>
        <label class="col-10">Numero de compte :
            <input class="d-flex col-10 p-2 fs-5 inputCreaAcount" type="number" name="number" id="cbNumber" placeholder="Numéro de compte" value="' . $i . '" disabled>
        </label>
        <label class="col-10" for="">Montant initial :
            <input class="d-flex col-10 p-2 fs-5 inputCreaAcount" type="number" name="amount" id="amount" placeholder="Montant initial *">
        </label>
    </form>
    <div class="d-flex col-12 col-lg-12 justify-content-center mt-2 mb-5 mt-lg-5 mb-lg-0">
        <button class="d-flex col-4 col-lg-2 justify-content-center p-1 p-lg-3 fs-4">AJOUTER</button>
    </div>
</section>');

include "view/template/footer.php";
