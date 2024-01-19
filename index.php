<?php
    require_once('config.php');
    require_once(ROOT_PATH.'/app/autoload.php');

    new \App\utils\Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);

    define('URI', $_SERVER['PATH_INFO'] ?? '/');
    
    session_start();

    $router = new \App\utils\Router();

    $router->get('/', 'Home', 'index');
    $router->get('/offres', 'Offers', 'index');
    $router->get('/offres/entreprise', 'Offers', 'company');
    $router->get('/offres/prestataire', 'Offers', 'provider');
    $router->get('/statistiques', 'Stats', 'index');
    $router->get('/profil', 'Profil', 'index');
    $router->get('/contact', 'Contact', 'index');
    $router->get('/creer-un-compte/entreprise', 'Profil', 'registerCompanyPage');
    $router->get('/creer-un-compte/prestataire', 'Profil', 'registerProviderPage');
    $router->post('/register/company', 'Profil', 'registerCompany');
    $router->post('/register/provider', 'Profil', 'registerProvider');
    $router->get('/connexion', 'Profil', 'loginPage');
    $router->post('/login', 'Profil', 'login');
    $router->get('/disconnect', 'Profil', 'disconnect');
    $router->run(URI);
?>