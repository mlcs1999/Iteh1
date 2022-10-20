<?php

    class User {
        public $id;
        public $username;
        public $password;

        public function __construct($id=null, $username, $password=null) {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
        }

        public static function logInUser($korisnik, mysqli $conn) {
            $query = "SELECT * FROM user WHERE username='$korisnik->username' and password='$korisnik->password'";
            //konekcija sa bazom
            // return true;
            return $conn->query($query);
        }
    }

?>