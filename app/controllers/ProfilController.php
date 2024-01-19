<?php
    namespace App\controllers;

use App\utils\Database;
use models\ProfilModel;

    class ProfilController extends Controller
    {
        public function index()
        {
            $this->render([
                'title' => 'Accueil',
                'main'  => $this->loadView('home'),
            ]);
        }

        public function registerCompanyPage()
        {
            $this->render([
                'title' => 'Créer un compte entreprise',
                'main'  => $this->loadView('register/company'),
            ]);
        }

        public function registerProviderPage()
        {
            $this->render([
                'title' => 'Créer un compte prestataire',
                'main'  => $this->loadView('register/provider'),
            ]);
        }

        public function loginPage()
        {
            $this->render([
                'title' => 'Connexion',
                'main'  => $this->loadView('login'),
            ]);
        }

        public function registerCompany()
        {
            $_SESSION['form'] = $_POST;
            if (count($this->verifyParameters($_POST, ['name', 'email', 'password', 'verify-password'])) === 0)
            {
                if ($_POST['password'] === $_POST['verify-password'])
                {
                    require_once(ROOT_PATH.'/app/models/ProfilModel.php');
                    $model = new ProfilModel(new Database());
                    if ($model->testEmail($_POST['email']))
                    {
                        $model->createUser([
                            'UTI_Nom'             => $_POST['name'],
                            'UTI_Email'           => $_POST['email'],
                            'UTI_MotDePasse'      => password_hash($_POST['password'], PASSWORD_DEFAULT),
                            'UTI_TypeUtilisateur' => 'company',
                        ]);
                    }
                    else {$_SESSION['form']['error'] = 'Ce mail est déjà utilisé par un autre utilisateur';}
                }
                else {$_SESSION['form']['error'] = 'Le mot de passe doit être vérifié';}
            }
            else {$_SESSION['form']['error'] = 'Tous les champs doivent être remplis';}
            if (isset($_SESSION['form']['error'])) {$this->redirect('creer-un-compte/entreprise');}
            else
            {
                unset($_SESSION['form']);
                $this->redirect('connexion');
            }
        }

        public function registerProvider()
        {
            $_SESSION['form'] = $_POST;
            if (count($this->verifyParameters($_POST, ['firstname', 'lastname', 'email', 'password', 'verify-password', 'skills', 'experiences', 'sectors'])) === 0)
            {
                if ($_POST['password'] === $_POST['verify-password'])
                {
                    require_once(ROOT_PATH.'/app/models/ProfilModel.php');
                    $model = new ProfilModel(new Database());
                    if ($model->testEmail($_POST['email']))
                    {
                        $model->createUser([
                            'UTI_Nom'             => $_POST['lastname'],
                            'UTI_Prenom'          => $_POST['firstname'],
                            'UTI_Email'           => $_POST['email'],
                            'UTI_MotDePasse'      => password_hash($_POST['password'], PASSWORD_DEFAULT),
                            'UTI_TypeUtilisateur' => 'provider',
                        ]);
                        $model->createProfil([
                            'PRO_Utilisateur_ID'     => $model->selectUserByEmail($_POST['email'])[0]['UTI_ID'],
                            'PRO_Competences'        => $_POST['skills'],
                            'PRO_Experience'         => $_POST['experiences'],
                            'PRO_Secteurs_Expertise' => $_POST['sectors'],
                        ]);
                    }
                    else {$_SESSION['form']['error'] = 'Ce mail est déjà utilisé par un autre utilisateur';}
                }
                else {$_SESSION['form']['error'] = 'Le mot de passe doit être vérifié';}
            }
            else {$_SESSION['form']['error'] = 'Tous les champs doivent être remplis';}
            if (isset($_SESSION['form']['error'])) {$this->redirect('creer-un-compte/prestataire');}
            else
            {
                unset($_SESSION['form']);
                $this->redirect('connexion');
            }
        }

        public function login()
        {
            $_SESSION['form'] = $_POST;
            if (count($this->verifyParameters($_POST, ['email', 'password'])) === 0)
            {
                require_once(ROOT_PATH.'/app/models/ProfilModel.php');
                $user = (new ProfilModel(new Database()))->selectUserByEmail($_POST['email']);
                if (count($user) && password_verify($_POST['password'], $user[0]['UTI_MotDePasse']))
                {
                    $_SESSION['user_id'] = $user[0]['UTI_ID'];
                    $_SESSION['user_type'] = $user[0]['UTI_TypeUtilisateur'];
                }
                else {$_SESSION['form']['error'] = 'Email ou mot de passe invalide';}
            }
            else {$_SESSION['form']['error'] = 'Tous les champs doivent être remplis';}
            if (isset($_SESSION['form']['error'])) {$this->redirect('connexion');}
            else
            {
                unset($_SESSION['form']);
                $this->redirect('');
            }
        }

        public function disconnect()
        {
            session_destroy();
            $this->redirect('');
        }
    }
?>