<?php

namespace App;

class Renderer {
    public function __construct(private string $viewPath, private ?array $params = null)
    {}

    public function view(){
        // Démarrer le système de mise en tampon (pour éventuellement des paramètres dans la vue en cas de besoin)
        ob_start();
        // Importer la vue (charger la vue)
        require BASE_VIEW_PATH . $this->viewPath . '.php'; // équivalent lien "../templates/dossierDeLaVue/vueCherchée.php  
        // relâcher le tampon en retournant le contenu sous forme de chaîne de caractères
        return ob_get_clean(); 
    }

    public static function make(string $viewPath, ?array $args = null): static
    {
        return new static($viewPath);
    }

    public function __toString()
    {
        return $this->view();
    }
}