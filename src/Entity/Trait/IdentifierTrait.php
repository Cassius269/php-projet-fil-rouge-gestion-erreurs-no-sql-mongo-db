<?php

namespace App\Entity\Trait;

trait IdentifierTrait {
    // La propriété Id
    private int $id;

    // Les getters et setters
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static // retourner l'objet lui-même à l'enregistrement ou modification de l'id
    {
        $this->id = $id;

        return $this;
    }
}