<?php
    namespace App\controllers;


    class StatsController extends Controller
    {
        public function index()
        {
            $this->render([
                'title' => 'Statistiques',
                'main'  => $this->loadView('stats'),
            ]);
        }
    }
?>