<?php
    namespace App\controllers;


    class OffersController extends Controller
    {
        public function index()
        {
            $this->render([
                'title' => 'Offres',
                'main'  => $this->loadView('offers/home'),
            ]);
        }

        public function company()
        {
            $this->render([
                'title' => 'Offres de prestations',
                'main'  => $this->loadView('offers/company'),
            ]);
        }

        public function provider()
        {
            $this->render([
                'title' => 'Offres des entreprises',
                'main'  => $this->loadView('offers/provider'),
            ]);
        }
    }
?>