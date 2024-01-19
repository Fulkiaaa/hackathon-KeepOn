<style>
    main {
        background: #F5F5F5;
    }
</style>
<section class="mb-lg">
    <h1 class="display-3 ebrima-bold text-center pb-5">Créer un compte entreprise</h1>
    <form class="d-flex flex-column" method="POST" action="<?= BASE_URI ?>/register/company">
        <?= isset($_SESSION['form']['error']) ? '<p class="alert alert-danger">'.$_SESSION['form']['error'].'</p>' : '' ?>
        <label class="fs-5 mb-2">Nom de l'entreprise&nbsp;:</label>
        <input class="fs-5 mb-4" name="name" type="text" placeholder="Nom de l'entreprise" <?= isset($_SESSION['form']['name']) ? 'value="'.$_SESSION['form']['name'].'"' : '' ?> required>
        <label class="fs-5 mb-2">E-mail&nbsp;:</label>
        <input class="fs-5 mb-4" name="email" type="email" placeholder="Mail" <?= isset($_SESSION['form']['email']) ? 'value="'.$_SESSION['form']['email'].'"' : '' ?> required>
        <label class="fs-5 mb-2">Mot de passe&nbsp;:</label>
        <input class="fs-5 mb-4" name="password" type="password" placeholder="Mot de passe" <?= isset($_SESSION['form']['password']) ? 'value="'.$_SESSION['form']['password'].'"' : '' ?> required>
        <label class="fs-5 mb-2">Vérification du mot de passe&nbsp;:</label>
        <input class="fs-5 mb-4" name="verify-password" type="password" placeholder="Confirmation du mot de passe" <?= isset($_SESSION['form']['verify-password']) ? 'value="'.$_SESSION['form']['verify-password'].'"' : '' ?> required>
        <input class="ebrima-bold fs-5 btn background-color-green rounded-pill px-4" type="submit" value="Créer le compte">
    </form>
</section>