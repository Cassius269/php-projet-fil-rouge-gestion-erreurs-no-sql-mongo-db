<?php

namespace App\Entity\Trait;

trait DescriptionTrait {
    // La propriété
    private string $description;   

    // Les getters et setters 

    /**
     * Get the value of description
     */ 
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}