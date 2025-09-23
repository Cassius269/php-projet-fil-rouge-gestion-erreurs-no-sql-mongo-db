<?php

namespace App\Entity;

class ErrorSolution {
    // Les propriétés 
    private Error $error;
    private Solution $solution;
    private bool $isValidated;

    // Les getters et setters

    /**
     * Get the value of error
     */ 
    public function getError(): Error
    {
        return $this->error;
    }

    /**
     * Set the value of error
     *
     * @return  self
     */ 
    public function setError(Error $error): static
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get the value of solution
     */ 
    public function getSolution(): Solution
    {
        return $this->solution;
    }

    /**
     * Set the value of solution
     *
     * @return  self
     */ 
    public function setSolution(Solution $solution): static
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get the value of isValidated
     */ 
    public function getIsValidated(): bool
    {
        return $this->isValidated;
    }

    /**
     * Set the value of isValidated
     *
     * @return  self
     */ 
    public function setIsValidated(bool $isValidated): static
    {
        $this->isValidated = $isValidated;

        return $this;
    }
}