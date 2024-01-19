<?php
    namespace App\controllers;

    
    class Controller {
        public function error(
            Int $code,
        ) {
            $this->render([
                'stylesheets' => ['global'],
                'main'        => $this->loadView('error', ['code' => $code]),
            ]);
        }

        public function render(
            Array $args,
        ) {
            if (!isset($args['icon'])) {$args['icon'] = '/assets/img/logo.svg';}
            if (!isset($args['header'])) {$args['header'] = $this->loadView('header');}
            if (!isset($args['footer'])) {$args['footer'] = $this->loadView('footer');}
            echo $this->loadView('default', $args);
        }

        public function loadJSON(
            String $name,
        ) {
            return json_decode(file_get_contents(ROOT_PATH."/data/$name.json"), true);
        }

        public function loadView(
            String $name,
            Array  $args = [],
        ) {
            ob_start();
            require(ROOT_PATH.'/app/views/'.$name.'.php');
            return ob_get_clean();
        }

        public function verifyParameters(
            Array $array,
            Array $requiredKeys,
        ) {
            $keyCheck = [];
            foreach ($requiredKeys as $valueKey)
            {
                if (!isset($array[$valueKey]) || empty($array[$valueKey])) {$keyCheck[] = $valueKey;}
            }
            return $keyCheck;
        }

        public function verifyLengths(
            Array $array,
            Array $valuesLength,
        ) {
            $keysLength = [];
            foreach ($valuesLength as $key => $value)
            {
                if (count($this->verifyParameters($array, [$key])) === 0 && strlen($array[$key]) > $value) {$keysLength[] = $key;}
            }
            return $keysLength;
        }

        public function verifyEmail(
            String $email,
        ) {
            list($address, $domain) = explode('@', $email);
            return filter_var($email, FILTER_VALIDATE_EMAIL) && checkdnsrr($domain);
        }

        public function getArg(
            Array  $array,
            String $key,
        ) {
            return isset($array[$key]) && !empty($array[$key]) ? $array[$key] : null;
        }

        public function getGETArg(
            String $key,
        ) {
            return $this->getArg($_GET, $key);
        }

        public function getPOSTArg(
            String $key,
        ) {
            return $this->getArg($_POST, $key);
        }

        public function redirect(
            String $page,
        ) {
            header('Location: '.BASE_URI.'/'.$page);
            die();
        }

        // public function sendEmail(
        //     String $from,
        //     String $email,
        //     String $object,
        //     String $message,
        // ) {
        //     echo mail(
        //         'thomas.baricault@gmail.com',
        //         'Test',
        //         'Abc def',
        //         implode("\r\n", [
        //             'MIME-Version: 1.0',
        //             'Content-type: text/html; charset=iso-8859-1',
        //             'To: Thomas Baricault <thomas.baricault@gmail.com>',
        //             'From: Thomas Baricault <thomas.baricault@gmail.com>'
        //         ]),
        //         // "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\nFrom: A B <test@gmail.com>\r\n"
        //     ) === true ? 'true' : 'false';
        // }
    }
?>