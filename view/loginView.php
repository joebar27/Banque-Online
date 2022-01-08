<?php
include_once 'view/template/header.php';
include_once 'view/template/nav.php';
?>

<section id="popUp"></section>

<section class="d-flex flex-wrap justify-content-center">
    <form class="d-flex flex-wrap justify-content-center contact-form col-6 mt-5" action="login.php" method="post">
        <h2 class="d-flex justify-content-center col-10 my-2 my-lg-3">
            Connectez vous
        </h2>
        <div class="d-flex flex-wrap justify-content-center form-content">
            <input class="d-flex col-10 p-2" type="text" id="login" name="login" placeholder="Identifiant *" />
            <input class="d-flex col-10 p-2" type="password" id="password" name="password" placeholder="Mot de passe *" />
        </div>
        <button class="button p-0 mt-lg-3 col-12" name="submit" value="connect">Connection</button>
        <div class="d-flex flex-wrap justify-content-center align-content-center">
            <p class="d-flex form-message m-0 p-3"></p>
        </div>
    </form>
</section>

<?php
include_once 'view/template/footer.php';
?>