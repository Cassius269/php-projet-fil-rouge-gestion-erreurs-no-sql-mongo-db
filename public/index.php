<?php

require_once '../Router/Router.php';

use Exceptions\RouteNotFoundException;
use Router\Router;

require_once  '../vendor/autoload.php';

// Importation du routeur
$router = new Router();

$router->register('/', function () 
{
    return 'homepage';
});

$router->register('/errors/add-new-error', function (){
    return 'page ajout de nouvelle erreur';
});

$router->register('/errors/delete/', function (){
    return 'page suppression d\'une erreur';
});

$router->register('/errors/update/', function (){
    return 'page de mise à jour d\'une erreur';
});

echo '<pre>';
    var_dump($router);
echo '</pre>';

// echo '<pre>';
//     var_dump(explode("?",$_SERVER['REQUEST_URI']));
// echo '</pre>';

try {
    $router->resolve($_SERVER['REQUEST_URI']);
}catch(RouteNotFoundException $e){
    echo $e->getMessage();
}

// // Importation de la connexion et instanciation
// require_once '../src/DB.php';
// use App\DB;

// $connexion = new DB;

// var_dump($connexion);

// // Enregistrer une erreur