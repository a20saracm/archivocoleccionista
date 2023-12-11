<?php

class SessionManager {
    const MAX_SECONDS_INACTIVITY = 600; // TEMPORAL

    public static function isRoleAllowedInAction (array $actionAllowedRoles) {
        self::iniciarSesion();

        if ( isset( $_SESSION["roleId"] ) ) {
            return in_array( $_SESSION["roleId"], $actionAllowedRoles );
        }

        return false;
    }

    public static function cerrarSesion() {
        self::iniciarSesion();

        session_destroy();

        $_SESSION = array();

        if ( ini_get( "session.use_cookies" ) ) {
            $params = session_get_cookie_params();

            setcookie( 
                session_name(), '', time() - 42000, $params["path"], 
                $params["domain"], $params["secure"], $params["httponly"] 
            );
        }
    }

    public static function iniciarSesion(): bool {
        $iniciada = true;

        if ( session_status() !== PHP_SESSION_ACTIVE ) {
            $iniciada = session_start();
        }

        return $iniciada;
    }

    public static function isUserLoggedIn() {
        $autenticado = self::iniciarSesion() && isset()
    }

}

?>