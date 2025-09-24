<?php

namespace Router;

// require_once '../Exceptions/RouteNotFoundException.php';
use Exception;
use Exceptions\RouteNotFoundException;

class Router {
    // Déclaration d'une propriété pour stocker les routes de l'application
    private array $routes;

    // Enregistrer une route et son action (c'est une fonction callback) dans le routeur (système de redirection des urls)
    public function register(string $path, callable|array $action):void
    {
        $this->routes[$path] = $action;
    }

    // Gérer la distribution de la requête au bon controller
    public function resolve(string $uri)
    {
       $path = explode('?', $uri)[0]; // recupérer la partie de l'url sans les paramètres
        $action =$this->routes[$path] ?? null; // condition ternaire pour évaluer si un url est présent dans les routes disponibles

        try{
            // Si c'est une fonction callback qui est passé en deuxième argument de la déclaration de la route, la retourner directement
            if(is_callable($action)){
                return $action; 
            }

            // Si c'est un tableau associatif qui est passé en deuxième argument de la déclaration de la route
            if(is_array($action)){
                // echo "<pre>";
                // var_dump($action);
                // echo "</pre>";

                // Extraire le nom pleinement qualifié du controller et de la méthode à executer
                [$controller, $method]= $action;

                // Verifier l'existence du controller et de la méthode appelée
                if(class_exists($controller) && method_exists($controller, $method)){
                    $class = new $controller(); // instancier le controller

                    // Executer la méthode appelée du controller
                    return call_user_func_array([$class, $method], []); // executer la méthode ensuite stopper l'execution du code si la route existe
                }
            }
        }
        catch(Exception $e){
            echo $e->getMessage(); // afficher les erreur(s) générique(s) d'execution
        }
        
       throw new RouteNotFoundException(); // lancer les erreurs personnalisées de route non trouvée
    }
}