<?php
    session_start();
   
    class User {

        public function isLoggedIn() {
            if (isset($_SESSION['authenticated'])) {
                return true;
            }
        }

        public function authenticate($username, $password) {
            
            if ($username == 'Eli.Mahmoodi14@gmail.com' && $password == '1234') {
                $_SESSION['authenticated'] = true;
                return true;
                
            }
        }
        
        public function handleNotLoggedIn() {
            if (!$this->isLoggedIn()) {
                header('location: Login.php');
               
            }
        }
     
    }





?>