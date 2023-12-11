<?php

spl_autoload_register( function( $class_name ) {
    $dirs = [ MODELS_FOLDER, VIEWDATA_FOLDER, CONTROLLERS_FOLDER, REPOSITORIES_FOLDER, ENTITIES_FOLDER, SERVICES_FOLDER, INCLUDES_FOLDER, TRAIS_FOLDER ];

    foreach ( $dirs as $dir ) {
        $route = dirname(__DIR__) . '\\' . $dir . '\\' . $class_name . '.php';

        $route = str_replace( "\\", DIRECTORY_SEPARATOR, $route );

        if ( file_exists( $route ) ) {
            require_once $route;
            return;
        }
    }
} );

?>