<style>
    main {
        background: #F5F5F5;
    }
</style>
<section class="container mb-lg">
    <h1 class="display-3 ebrima-bold text-center pb-5">Contact</h1>
    <div class="row">
        <div class="col-12 col-md-6 p-3">
            <p class="fs-5 mb-4">Pour une résolution plus rapide à vos demandes, nous vous encourageons à contacter Keep On via le service de chat.</p>
            <p class="fs-5">answers@keepon.com</p>
            <p class="fs-5">Tel : 0123456789</p>
        </div>
        <div class="col-12 col-md-6 p-3">
            <form class="d-flex flex-column">
                <label class="fs-5 mb-2">Nom&nbsp;:</label>
                <input class="fs-5 mb-4" type="text" placeholder="Nom" required>
                <label class="fs-5 mb-2">Téléphone&nbsp;:</label>
                <input class="fs-5 mb-4" type="tel" placeholder="Téléphone" required>
                <label class="fs-5 mb-2">Mail&nbsp;:</label>
                <input class="fs-5 mb-4" type="email" placeholder="Mail" required>
                <label class="fs-5 mb-2">Message&nbsp;:</label>
                <textarea class="fs-5 mb-4" placeholder="Message" rows="5" required></textarea>
                <input class="ebrima-bold fs-5 btn background-color-green rounded-pill px-4" type="submit" value="Envoyer">
            </form>
        </div>
        <div class="col-12 d-flex justify-content-center gap-4 mt-5 pt-5">
            <a href="<?= LINKEDIN_URL ?>">
                <img class="icon" src="<?= BASE_URI ?>/assets/img/networks/linkedin.svg">
            </a>
            <a href="<?= INSTAGRAM_URL ?>">
                <img class="icon" src="<?= BASE_URI ?>/assets/img/networks/instagram.svg">
            </a>
            <a href="<?= FACEBOOK_URL ?>">
                <img class="icon" src="<?= BASE_URI ?>/assets/img/networks/facebook.svg">
            </a>
        </div>
    </div>
</section>