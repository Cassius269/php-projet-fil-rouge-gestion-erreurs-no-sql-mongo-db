<?php

require_once  '../vendor/autoload.php';

// Importation de la connexion et instanciation
require_once '../src/DB.php';
use App\DB;

$connexion = new DB;

var_dump($connexion);

// Enregistrer une erreur