<style>
    main {
        background: #F5F5F5;
    }

    .separator-curve {
        position: absolute;
        left: 0;
        margin-top: -150px;
    }

    .separator-line {
        height: 6px;
    }

    .timeline {
        margin-bottom: -80px;
    }

    .timeline-line {
        width: 6px;
        height: 100vh;
    }

    .timeline-dot {
        position: relative;
        width: 20px;
        height: 20px;
        border-radius: 50%;
    }

    .timeline :nth-child(2) {top: -100vh;}
    .timeline :nth-child(3) {top: calc(-75vh - 20px);}
    .timeline :nth-child(4) {top: calc(-50vh - 40px);}
    .timeline :nth-child(5) {top: calc(-25vh - 60px);}

    .timeline > :first-child > *, .timeline > :last-child > * {
        display: flex;
        flex-direction: column;
        height: 50vh;
    }

    .timeline > :first-child p {padding-top: 25vh;}

    input[type="submit"] {width: max-content;}
</style>
<section class="container p-5 mb-lg">
    <div class="row align-items-center gap-5">
        <div class="col-12 col-md-7 row">
            <div class="pb-5">
                <h1 class="display-3 ebrima-bold">Votre expertise</br>n'est pas <span class="text-color-green">Obsolète</span></h1>
            </div>
            <div class="py-5">
                <p class="fs-4 text-muted ebrima-regular">Keep On révolutionne le monde du travail en mettant en lumière un synergie unique : la rencontre entre l'expérience des séniors et la dynamique innovante des entreprises</p>
            </div>
            <div class="d-flex gap-4">
                <div class=""> 
                    <a class="fs-5 text-decoration-none btn background-color-green rounded-pill px-4 ebrima-regular" href="<?= BASE_URI ?>/offres/entreprise">Entreprise</a>
                </div>
                <div class=""> 
                    <a class="fs-5 text-decoration-none btn background-color-black rounded-pill px-4 ebrima-regular" href="<?= BASE_URI ?>/offres/prestataire">Prestataire</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 row">
            <img class="w-100" src="<?= BASE_URI ?>/assets/img/pictures/desktop_woman.png">
        </div>
    </div>
</section>
<section class="p-5 mb-xl">
    <h2 class="display-3 ebrima-bold text-center">Avantages</h2>
    <p class="fs-5 text-muted ebrima-regular text-center mb-5">Pour les entreprises</p>
    <div class="container text-center">
        <div class="row gap-5">
            <div class="col-sm square-border-company px-5 pt-4 rounded-5">
                <h3 class="ebrima-bold fs-4">Accès à l'expérience</h3>
                <p class="ebrima-regular fs-6 text-muted">
                    Débloquez les secrets d'une gestion d'affaires réussie avec l'expertise accumulée de nos seniors.
                    Chaque conseil que vous recevez est le fruit de plusieurs décennies de succès et d'apprentissage.
                </p>
            </div>
            <div class="col-sm square-border-company px-5 pt-4 rounded-5">
                <h3 class="ebrima-bold fs-4">Économie stratégique</h3>
                <p class="ebrima-regular fs-6 text-muted">
                    Optimisez votre budget sans compromettre la qualité. Notre plateforme vous connecte avec des 
                    professionnels chevronnés à une fraction du coût habituel des services de conseil.
                </p>
            </div>
            <div class="col-sm square-border-company px-5 pt-4 rounded-5">
                <h3 class="ebrima-bold fs-4">Décisions éclairées</h3>
                <p class="ebrima-regular fs-6 text-muted">
                    Renforcez votre prise de décision avec des insights éprouvés. L'expérience ne se démode jamais ; 
                    elle affine votre stratégie et vous propulse vers le succès.
                </p>
            </div>
        </div>
    </div>
</section>
<img class="separator-curve" src="<?= BASE_URI ?>/assets/img/separator.svg">
<section class="p-5 mt-xl mb-lg">
    <h2 class="display-3 ebrima-bold text-center">Avantages</h2>
    <p class="fs-5 text-muted ebrima-regular text-center mb-5">Pour les prestataires</p>
    <div class="container text-center">
        <div class="row gap-5">
            <div class="col-sm square-border-presta px-5 pt-4 rounded-5">
                <h3 class="ebrima-bold fs-4">Résillilence financière</h3>
                <p class="ebrima-regular fs-6 text-muted">
                    Profitez d'une opportunité élégante pour augmenter vos revenus. 
                    La retraite est le moment idéal pour récolter les fruits de votre labeur d'une manière flexible et gratifiante.
                </p>
            </div>
            <div class="col-sm square-border-presta px-5 pt-4 rounded-5">
                <h3 class="ebrima-bold fs-4">Valorisation du savoir</h3>
                <p class="ebrima-regular fs-6 text-muted">
                    Votre carrière n'est pas derrière vous, elle prend une nouvelle dimension.
                    Partagez votre sagesse professionnelle et restez influent dans le monde des affaires.
                </p>
            </div>
            <div class="col-sm square-border-presta px-5 pt-4 rounded-5">
                <h3 class="ebrima-bold fs-4">Réseau social actif</h3>
                <p class="ebrima-regular fs-6 text-muted">
                    Tissez de nouveaux liens professionnel personnels. Keep on est plus qu'une plateforme ;
                    c'est une communauté qui valorise ce que vous apportez à la table.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="p-5 mb-xl">
    <div class="text-center">
        <h2 class="display-3 ebrima-bold text-center pb-5">Comment ça marche ?</h2>
        <div class="container">
            <div class="timeline row pt-5">
                <div class="col-4">
                    <div>
                        <p class="fs-5 text-start"><span class="text-color-green">2.</span> En fonction de votre rôle, rendez-vous dans la catégorie d'offre disponible.</p>
                    </div>
                    <div>
                        <p class="fs-5 text-start"><span class="text-color-green">4.</span> Recrutez ou faites vous recruter !</p>
                    </div>
                </div>
                <div class="col-4 d-flex flex-column align-items-center pt-3">
                    <div class="timeline-line background-color-green"></div>
                    <div class="timeline-dot background-color-green"></div>
                    <div class="timeline-dot background-color-green"></div>
                    <div class="timeline-dot background-color-green"></div>
                    <div class="timeline-dot background-color-green"></div>
                </div>
                <div class="col-4">
                    <div>
                        <p class="fs-5 text-start"><span class="text-color-green">1.</span> Créer un compte Keep On.</p>
                    </div>
                    <div>
                        <p class="fs-5 text-start"><span class="text-color-green">3.</span> En fonction de votre besoin, contactez la personne qui vous intéresse.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container mb-xl">
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <img class="w-100 rounded-4" src="<?= BASE_URI ?>/assets/img/pictures/men_sun.png">
        </div>
        <div class="col-12 col-md-6 p-5">
            <div class="separator-line rounded-pill background-color-green mb-5"></div>
            <h2 class="fs-3 ebrima-bold mb-4">Rejoignez la communauté<br><span class="text-color-green">Keep</span> On aujourd'hui !</h2>
            <p class="text-muted ebrima-regular mb-4">
                Trouvez l'expertise qui fera la différence. Inscrivez-vous et publiez
                votre première mission dès maintenant.
            </p>
            <div class="col-10 col-md-2"> 
                <a class="fs-5 text-decoration-none btn background-color-green rounded-pill px-4 ebrima-regular" href="<?= BASE_URI ?>/creer-un-compte/entreprise">Entreprise</a>
            </div>
        </div>
    </div>
</section>
<section class="container mb-xl">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 p-5">
            <h2 class="fs-3 ebrima-bold mb-4">L'aventure commence<br>sur <span class="text-color-green">Keep</span> On !</h2>
            <p class="text-muted ebrima-regular mb-4">
                Votre expérience a une grande valeur. Inscrivez-vous pour continuer à la mettre en oeuvre et 
                enrichir votre réseau.
            </p>
            <div class="col-10 col-md-2"> 
                <a class="fs-5 text-decoration-none btn background-color-black rounded-pill px-4 ebrima-regular" href="<?= BASE_URI ?>/creer-un-compte/prestataire">Prestataire</a>
            </div>
            <div class="separator-line rounded-pill background-color-green mt-5"></div>
        </div>
        <div class="col-12 col-md-6">
            <img class="w-100 rounded-4" src="<?= BASE_URI ?>/assets/img/pictures/men_women.png">
        </div>
    </div>
</section>