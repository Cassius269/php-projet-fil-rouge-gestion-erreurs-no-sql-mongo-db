<?php

namespace App\Entity;

use App\Entity\Trait\DescriptionTrait;
use App\Entity\Trait\IdentifierTrait;
use App\Entity\Trait\TitleTrait;
use DateTrait;

class Solution {
    // Importation des traits
    use IdentifierTrait; // importer le trait de l'identifiant ID
    use TitleTrait; // importer le trait du titre
    use DescriptionTrait;
    use DateTrait; // importer le trait des dates de création et de mise à jour
    
    // Propriété additionnelle
    private User $author;

    // Les getter et setter additionnelles
    

    /**
     * Get the value of author
     */ 
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor(User $author): static
    {
        $this->author = $author;

        return $this;
    }
}