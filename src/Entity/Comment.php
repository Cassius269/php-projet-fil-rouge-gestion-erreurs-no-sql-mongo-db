<?php

namespace App\Entity;

    use App\Entity\Trait\DescriptionTrait;
    use App\Entity\Trait\IdentifierTrait;
    use App\Entity\Trait\TitleTrait;
    use DateTrait;

class Comment {
    use IdentifierTrait; // importer le trait de l'identifiant ID
    use TitleTrait; // importer le trait du titre
    use DateTrait; // importer le trait des dates de création et de mise à jour
    
    // La propriété additionnelle
    private string $content;

    // Les getter et setter additionnelles
    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content):static
    {
        $this->content=$content;

        return $this;
    }
}