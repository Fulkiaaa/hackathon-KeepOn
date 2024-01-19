<div class="d-flex justify-content-between align-items-center">
    <div>
        <nav class="d-flex gap-3">
            <a class="ebrima-bold fs-1 text-decoration-none " href="<?= BASE_URI ?>">
                <span class="text-color-green">Keep</span>
                <span class="text-dark">on</span>
            </a>
        </nav>
    </div>
    <div class="d-flex gap-5 align-items-center">
        <nav class="d-flex gap-3">
            <a class="ebrima-bold fs-5 text-decoration-none <?= URI === '/offres' || URI === '/offres/entreprise' || URI === 'offres/prestataire' ? 'text-color-green' : 'text-dark'?>" href="<?= BASE_URI ?>/offres<?= isset($_SESSION['user_type']) ? ($_SESSION['user_type'] === 'company' ? '/entreprise' : '/prestataire') : '' ?>">Offres</a>
            <a class="ebrima-bold fs-5 text-decoration-none <?= URI === '/statistiques' ? 'text-color-green' : 'text-dark' ?>" href="<?= BASE_URI ?>/statistiques">Statistiques</a>
            <a class="ebrima-bold fs-5 text-decoration-none <?= URI === '/contact' ? 'text-color-green' : 'text-dark' ?>" href="<?= BASE_URI ?>/contact">Contact</a>
        </nav>
        <?php if (isset($_SESSION['user_id'])): ?>
            <div class="dropdown">
                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="icon" src="<?= BASE_URI ?>/assets/img/user.svg">
                </div>
                <ul class="dropdown-menu">
                    <li><a class="ebrima-bold dropdown-item" href="<?= BASE_URI ?>/profil">Mon profil</a></li>
                    <li><a class="ebrima-bold dropdown-item text-danger" href="<?= BASE_URI ?>/disconnect">Se déconnecter</a></li>
                </ul>
            </div>
        <?php else: ?>
            <a class="ebrima-bold fs-5 text-decoration-none btn background-color-green rounded-pill px-4" href="<?= BASE_URI ?>/connexion">Connexion</a>
        <?php endif; ?>
    </div>
</div>