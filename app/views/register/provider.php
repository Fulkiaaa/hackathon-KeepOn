<style>
    main {
        background: #F5F5F5;
    }
</style>
<section class="mb-lg">
    <h1 class="display-3 ebrima-bold text-center pb-5">Créer un compte prestataire</h1>
    <form class="d-flex flex-column" method="POST" action="<?= BASE_URI ?>/register/provider">
        <?= isset($_SESSION['form']['error']) ? '<p class="alert alert-danger">'.$_SESSION['form']['error'].'</p>' : '' ?>
        <label class="fs-5 mb-2">Nom&nbsp;:</label>
        <input class="fs-5 mb-4" name="lastname" type="text" placeholder="Nom" <?= isset($_SESSION['form']['lastname']) ? 'value="'.$_SESSION['form']['lastname'].'"' : '' ?> required>
        <label class="fs-5 mb-2">Prénom&nbsp;:</label>
        <input class="fs-5 mb-4" name="firstname" type="text" placeholder="Prénom" <?= isset($_SESSION['form']['firstname']) ? 'value="'.$_SESSION['form']['firstname'].'"' : '' ?> required>
        <label class="fs-5 mb-2">E-mail&nbsp;:</label>
        <input class="fs-5 mb-4" name="email" type="email" placeholder="Mail" <?= isset($_SESSION['form']['email']) ? 'value="'.$_SESSION['form']['email'].'"' : '' ?> required>
        <label class="fs-5 mb-2">Mot de passe&nbsp;:</label>
        <input class="fs-5 mb-4" name="password" type="password" placeholder="Mot de passe" <?= isset($_SESSION['form']['password']) ? 'value="'.$_SESSION['form']['password'].'"' : '' ?> required>
        <label class="fs-5 mb-2">Vérification du mot de passe&nbsp;:</label>
        <input class="fs-5 mb-4" name="verify-password" type="password" placeholder="Confirmation du mot de passe" <?= isset($_SESSION['form']['verify-password']) ? 'value="'.$_SESSION['form']['verify-password'].'"' : '' ?> required>
        <label class="fs-5 mb-2">Compétences&nbsp;:</label>
        <textarea class="fs-5 mb-4" name="skills" placeholder="Compétences" rows="5" required><?= isset($_SESSION['form']['skills']) ? $_SESSION['form']['skills'] : '' ?></textarea>
        <label class="fs-5 mb-2">Expériences &nbsp;:</label>
        <textarea class="fs-5 mb-4" name="experiences" placeholder="Expériences" rows="5" required><?= isset($_SESSION['form']['experiences']) ? $_SESSION['form']['experiences'] : '' ?></textarea>
        <label class="fs-5 mb-2">Secteurs d'expertise&nbsp;:</label>
        <textarea class="fs-5 mb-4" name="sectors" placeholder="Secteurs d'expertise" rows="5" required><?= isset($_SESSION['form']['sectors']) ? $_SESSION['form']['sectors'] : '' ?></textarea>
        <input class="ebrima-bold fs-5 btn background-color-green rounded-pill px-4" type="submit" value="Créer le compte">
    </form>
</section>