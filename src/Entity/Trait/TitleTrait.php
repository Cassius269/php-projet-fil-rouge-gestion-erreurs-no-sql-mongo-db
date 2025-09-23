<?php

namespace App\Entity\Trait;

trait TitleTrait {
    // Les propriétés
    private string $title;
    
    // Les getters et setters
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }    
}