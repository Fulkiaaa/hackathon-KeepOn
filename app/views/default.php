<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if (isset($args['noindex'])): ?>
            <meta name="robots" content="noindex">
            <meta name="googlebot" content="noindex">
        <?php else: ?>
            <meta name="robots" content="index, follow">
        <?php endif; ?>

        <link rel="canonical" href="<?= BASE_URI ?><?= $_SERVER['PATH_INFO'] ?? '/' ?>">
        <link rel="alternate" hreflang="fr" href="<?= BASE_URI ?><?= $_SERVER['PATH_INFO'] ?? '/' ?>">

        <?php if (isset($args['icon'])): ?>
            <link rel="icon" type="vector/svg" href="<?= BASE_URI ?><?= $args['icon'] ?>">
        <?php endif; ?>

        <link href="https://db.onlinewebfonts.com/c/ca6035c04f0c0e253d167f872e88ed4a?family=Ebrima+Bold" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/1ba82d324736a8a9d4327d482c4627c4?family=Ebrima" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= BASE_URI ?>/assets/css/global.css">
        <?php
            if (isset($args['stylesheets'])):
            foreach ($args['stylesheets'] as $name):
        ?>
            <link rel="stylesheet" href="<?= BASE_URI ?>/assets/css/<?= $name ?>.css">
        <?php endforeach; endif; ?>

        <title><?= isset($args['title']) ? $args['title'].' - ' : '' ?><?= SITE_NAME ?></title>
    </head>
    <body>
        <header id="header" class="container p-3">
            <?php if (isset($args['header'])): ?>
                <?= $args['header'] ?>
            <?php endif; ?>
        </header>
        <main id="main" class="container-fluid p-5">
            <?php if (isset($args['main'])): ?>
                <?= $args['main'] ?>
            <?php endif; ?>
        </main>
        <footer id="footer" class="container-fluid p-5 bg-dark">
            <?php if (isset($args['footer'])): ?>
                <?= $args['footer'] ?>
            <?php endif; ?>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php if (isset($args['scripts'])): ?>
            <?php foreach ($args['scripts'] as $script): ?>
                <script type="<?= $script['module'] ? 'module' : 'text/javascript' ?>" src="<?= BASE_URI ?>/assets/js/<?= $script['name'] ?>.js"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>