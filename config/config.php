<?php

/* Opciones predeterminadas
========================================================== */
/* Acciones */
const DEFAULT_CONTROLLER = "User"; //TEMPORAL
const DEFAULT_ACTION = "login"; //TEMPORAL
const REGISTER_ACTION = "register";

/* Carpetas */
const CONTROLLERS_FOLDER = "controller";
const MODELS_FOLDER = "model";
const REPOSITORIES_FOLDER = MODELS_FOLDER . DIRECTORY_SEPARATOR . "repository";
const ENTITIES_FOLDER = MODELS_FOLDER . DIRECTORY_SEPARATOR . "entity";
const SERVICES_FOLDER = MODELS_FOLDER . DIRECTORY_SEPARATOR . "service";
const VIEWDATA_FOLDER = MODELS_FOLDER . DIRECTORY_SEPARATOR . "viewData";
const INCLUDES_FOLDER = "includes";
const TRAIS_FOLDER = MODELS_FOLDER . DIRECTORY_SEPARATOR . "traits";
const FILES_FOLDER = "files";
const IMAGES_FOLDER = FILES_FOLDER . DIRECTORY_SEPARATOR . "img";
const CONFIG_FOLDER = "config";
const CONFIG_FOLDER_DB = "db";
const VIEW_FOLDER = "view";

/* General */
const IMAGE_DEFAULT = "no-picture.jpg";
const LOGIN_ERROR_MSG = "No se ha podido iniciar sesión.";
const ADMIN_ROLE = "admin";
const USER_ROLE = "user";
const DATABASE_INI_FILE = CONFIG_FOLDER . DIRECTORY_SEPARATOR . CONFIG_FOLDER_DB . DIRECTORY_SEPARATOR . "database.ini";
const DEFAULT_PAGE = ".." . DIRECTORY_SEPARATOR . VIEW_FOLDER . DIRECTORY_SEPARATOR . "index.php";

?>