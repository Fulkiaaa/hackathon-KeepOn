<style>
    main {
        background: #F5F5F5;
    }
</style>
<section class="mb-5">
    <h1 class="display-4 ebrima-bold text-center pb-5">Connexion</h1>
    <form method="POST" action="<?= BASE_URI ?>/login">
        <label class="fs-5 mb-2">E-mail&nbsp;:</label>
        <input class="fs-5 mb-4" type="text" name="email" placeholder="exemple@domaine.com" required/>
        <label class="fs-5 mb-2">Mot de passe&nbsp;:</label>
        <input class="fs-5 mb-4" type="password" name="password" placeholder="Mot de passe" required/>
        <input class="ebrima-bold fs-5 btn background-color-green rounded-pill px-4" type="submit" name="connexion" value="Connexion" />
    </form>
</section>
<section class="d-flex flex-column align-items-center mb-lg">
    <h2 class="ebrima-bold text-center pb-3 fs-4">Vous n'avez pas encore de compte ?</h2>
    <div class="d-flex justofy-content-center gap-4">
        <div class=""> 
            <a class="fs-5 text-decoration-none btn background-color-green rounded-pill px-4 ebrima-regular" href="<?= BASE_URI ?>/creer-un-compte/entreprise">Je suis une entreprise</a>
        </div>
        <div class=""> 
            <a class="fs-5 text-decoration-none btn background-color-black rounded-pill px-4 ebrima-regular" href="<?= BASE_URI ?>/creer-un-compte/prestataire">Je suis un prestataire</a>
        </div>
    </div>
</section>