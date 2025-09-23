<?php

namespace App\Entity\DTO;

use DateTime;

class ErrorDto {
    public string $title;
    public string $description;
    public DateTime $createdAt;
    public DateTime $updatedAt;
    public string $emailAuthor;
    public string $categoryName;
}