<?php
include "template/header.php";
include "template/nav.php";

?>
<section class="d-flex justify-content-center">
    <form class="d-flex flex-wrap justify-content-center contact-form col-10 mt-5">
        <h2 class="d-flex justify-content-center col-6 mt-2 mt-lg-5">
            Contactez-moi
        </h2>
        <div class="d-flex flex-wrap justify-content-center form-content">
            <input class="d-flex col-10 p-2" type="text" id="name" name="name" placeholder="nom *" />
            <input class="d-flex col-10 p-2" type="text" id="company" name="company" placeholder="société" />
            <input class="d-flex col-10 p-2" type="text" id="phone" name="phone" placeholder="téléphone" />
            <div class="email-content d-flex col-12">
                <label id="not-mail">Email non valide</label>
                <input class="d-flex col-12 p-2" type="mail" id="email" name="email" placeholder="email *" />
            </div>
            <textarea class="d-flex col-10 p-2" id="message" name="message" placeholder="message *"></textarea>
        </div>
        <input class="button p-0 col-12" type="button" value="Envoyer" />
        <div class="d-flex flex-wrap justify-content-center align-content-center">
            <p class="d-flex form-message m-0 p-3"></p>
        </div>
    </form>
</section>
<?php include "template/footer.php"; ?>