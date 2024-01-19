<style>
    main {
        background-color: rgba(0, 0, 0, 0.5);
        background-image: url("<?= BASE_URI ?>/assets/img/pictures/stats.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .progress-bar {
        height: 10px;
        border-radius: 5px;
    }

    .progress-bar ~ span {
        width: max-content;
    }
</style>
<section class="container">
    <h1 class="text-center text-white">Quelques Statistiques...</h1>
    <p class="fs-3 text-center text-white pb-5 mb-5">Un nouveau départ...</p>
    <div class="row mb-5">
        <span class="col-3 fs-5 text-end text-white">Nouveaux prestataires</span>
        <div class="col-9 d-flex align-items-center gap-3">
            <div class="progress-bar background-color-green flex-grow-1" style="max-width: 70%"></div>
            <span class="fs-5 text-white">700 000</span>
        </div>
    </div>
    <div class="row mb-5">
        <span class="col-3 fs-5 text-end text-white">Âge moyen</span>
        <div class="col-9 d-flex align-items-center gap-3">
            <div class="progress-bar background-color-green flex-grow-1" style="max-width: 10%"></div>
            <span class="fs-5 text-white">62 ans</span>
        </div>
    </div>
    <div class="row mb-5">
        <span class="col-3 fs-5 text-end text-white">Nouvelles entreprises</span>
        <div class="col-9 d-flex align-items-center gap-3">
            <div class="progress-bar background-color-green flex-grow-1" style="max-width: 80%"></div>
            <span class="fs-5 text-white">995 000</span>
        </div>
    </div>
    <div class="row">
        <span class="col-3 fs-5 text-end text-white">Nombre de startups</span>
        <div class="col-9 d-flex align-items-center gap-3">
            <div class="progress-bar background-color-green flex-grow-1" style="max-width: 85%"></div>
            <span class="fs-5 text-white">1 000 000</span>
        </div>
    </div>
</section>