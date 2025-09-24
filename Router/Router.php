<?php

namespace Router;

// require_once '../Exceptions/RouteNotFoundException.php';
use Exceptions\RouteNotFoundException;

class Router {
    // Déclaration d'une propriété pour stocker les routes de l'application
    private array $routes;

    // Enregistrer une route et son action (c'est une fonction callback) dans le routeur (système de redirection des urls)
    public function register(string $path, callable|array $action):void
    {
        $this->routes[$path] = $action;
    }

    public function resolve(string $uri)
    {
       $path = explode('?', $uri)[0]; // recupérer la partie de l'url sans les paramètres
        $action =$this->routes[$path] ?? null; // condition ternaire pour évaluer si un url est présent dans les routes disponibles

        // Si c'est une fonction callback qui est passé en deuxième argument de la déclaration de la route, l'executer directement
        if(is_callable($action)){
            return $action; 
        }

        // Si c'est un tableau associatif qui est passé en deuxième argument de la déclaration de la route
        if(is_array($action)){
            // echo "<pre>";
            // var_dump($action);
            // echo "</pre>";

            // Extraire le nom pleinement qualifié du controller et de la méthode à executer
            [$className, $method]= $action;

            // Verifier l'existence du controller et de la méthode appelée
            if(class_exists($className) && method_exists($className, $method)){
                $class = new $className();

                // Appeler la méthode de la classe si la classe existe
                call_user_func_array([$class, $method], []);
                return; // stopper l'execution du code si la route existe
            }
        }

        throw new RouteNotFoundException();
    }
}