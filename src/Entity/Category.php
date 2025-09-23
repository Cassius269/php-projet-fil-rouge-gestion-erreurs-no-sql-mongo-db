<?php
namespace App\Entity;

use App\Entity\Trait\DescriptionTrait;
use App\Entity\Trait\IdentifierTrait;
use App\Entity\Trait\TitleTrait;
use DateTrait;

class Category {
    use IdentifierTrait; // importer le trait de l'identifiant ID
    use DateTrait; // importer le trait des dates de création et de mise à jour
    use TitleTrait; // importer le trait du titre
    use DescriptionTrait;
}