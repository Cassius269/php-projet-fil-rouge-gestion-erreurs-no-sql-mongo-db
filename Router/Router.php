<?php

namespace Router;

require_once '../Exceptions/RouteNotFoundException..php';
use Exceptions\RouteNotFoundException;

class Router {
    // Déclaration d'une propriété pour stocker les routes de l'application
    private array $routes;

    // Enregistrer une route et son action dans le routeur (système de redirection des urls)
    public function register(string $path, callable $action):void
    {
        $this->routes[$path] = $action;
    }

    public function resolve(string $uri)
    {
       $path = explode('?', $uri)[0]; // recupérer la partie de l'url sans les paramètres
        $action =$this->routes[$path] ?? null; // condition ternaire pour évaluer si un url est présent dans les routes disponibles

        // Si l'uri n'est pas trouvé, renvoyer une erreur 404
        if(!is_callable($action)){
            throw new RouteNotFoundException();
        }

        // Sinon retourner l'uri
        return $action; 
    }
}