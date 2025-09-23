<?php

use DateTime;
use DateTimeImmutable;

trait DateTrait {

    // Les propriétés
    private DateTimeImmutable $createdAt;
    private DateTime $updatedAt;

    // Les getters et setters
        /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt(DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of updatedAt
     */ 
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @return  self
     */ 
    public function setUpdatedAt(DateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}