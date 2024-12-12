<?php

class Session {
    
    public static function Session_start() {
        session_start();
    }

    public static function Session_set($email, $pass, $result) {
        $_SESSION['Email'] = $email;
        $_SESSION['Pass'] = $pass;
        // $_SESSION['Username'] = $result;
        $_SESSION['Username'] = htmlspecialchars(trim($result), ENT_QUOTES, 'UTF-8');
    }

    public static function Session_stop() {
        session_destroy();
    }

}

?>