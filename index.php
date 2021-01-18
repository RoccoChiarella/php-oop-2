<?php
    class User{
        public $id;
        public $username;
        public $email;
        public $eta;

        function __construct($_id, $_username, $_email, $_eta) {
            $this->id = $_id;
            $this->username = $_username;
            $this->email = $_email;
            $this->eta = $_eta;
        }

        function getEmail() {
            return $this->email;
        }
    }

    $user = new User(0, 'Rocco', 'rocco.chiarella.rc@gmail.com', 20);
    echo 'Username: '. $user->username .'<br>Email: '. $user->getEmail();
?>
