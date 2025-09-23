<?php

namespace App\Entity;

use App\Entity\Trait\DescriptionTrait;
use App\Entity\Trait\IdentifierTrait;
use App\Entity\Trait\TitleTrait;
use DateTrait;

class Error { 
    // Importation des traits
    use IdentifierTrait; // importer le trait de l'identifiant ID
    use TitleTrait; // importer le trait du titre
    use DescriptionTrait;
    use DateTrait; // importer le trait des dates de création et de mise à jour
    
    // Propriétés additionnelles
    private ?User $author;
    private Category $category;

    // Les getters et setters additionnelles
    public function getAuthor():User
    {
        return $this->author;
    }

    public function setAuthor(User $author): static
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory(Category $category): static
    {
        $this->category = $category;

        return $this;
    }
}