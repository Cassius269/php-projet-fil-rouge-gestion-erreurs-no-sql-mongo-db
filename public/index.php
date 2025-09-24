<?php

require_once  '../vendor/autoload.php';

use Exceptions\RouteNotFoundException;
use Router\Router;

// Déclarer une constante globale contenant le chemin de base vers le dossier principal des vues
define('BASE_VIEW_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR . 'templates'. DIRECTORY_SEPARATOR);

// var_dump(BASE_VIEW_PATH);
// Importation du routeur
$router = new Router();

$router->register('/', ['App\Controller\HomeController', 'index']);
$router->register('/errors/add-new-error',['src/Controller/ErrorController', 'create']);

$router->register('/errors/show/', ['src/Controller/ErrorController', 'show']);

$router->register('/errors/update/', ['src/Controller/ErrorController', 'update']);

$router->register('/errors/delete/', ['src/Controller/ErrorController', 'delete']);

// Afficher toutes les routes de l'application
// echo '<pre>';
//     var_dump($router);
// echo '</pre>';

// echo '<pre>';
//     var_dump(explode("?",$_SERVER['REQUEST_URI']));
// echo '</pre>';

try {
    echo $router->resolve($_SERVER['REQUEST_URI']); // afficher la vue si elle est résolue
}catch(RouteNotFoundException $e){
    echo $e->getMessage();
}

// // Importation de la connexion et instanciation
// require_once '../src/DB.php';
// use App\DB;

// $connexion = new DB;

// var_dump($connexion);

// // Enregistrer une erreur

