<?php

namespace App\Entity;

use App\Entity\Trait\IdentifierTrait;
use DateTrait;

class User { 
    use IdentifierTrait; // importer le trait de l'identifiant ID
    use DateTrait; // importer le trait des dates de création et de mise à jour

    // Les propriétés
    private string $firstname;
    private string $lastname;
    private array $roles;

    // Les getteurs et setters
    public function getFirstname(): string
    { return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this; // retourner l'objet courant
    }

    
    public function getLastname(): string
    { return $this->firstname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this; // retourner l'objet courant
    }

        public function getRoles(): array
    { 
        return $this->roles;
    }

    public function setRoles(string $roles): static
    {
        $this->roles[] = $roles;

        return $this; // retourner l'objet courant
    }
}