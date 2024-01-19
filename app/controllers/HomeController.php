<?php
    namespace App\controllers;


    class HomeController extends Controller
    {
        public function index()
        {
            $this->render([
                'title' => 'Accueil',
                'main'  => $this->loadView('home'),
            ]);
        }
    }
?>