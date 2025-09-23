<?php

namespace App\Repository;

use App\DB;
use App\Entity\DTO\ErrorDto;
use DateTime;
use MongoDB\Collection;

class ErrorRepository {
    // Les propriétés
    private DB $db;
    private ?Collection $collection = null;
    
    // Le constructeur
    public function __construct(DB $db) {
        $this->db = $db;
        $this->db->client->db_gestion_errors->errros;
    }
    
    // Sauvegarder une nouvelle erreur
    public function save(ErrorDto $errorDto): void
    {
        $this->collection->insertOne([
            "title" => $errorDto->title,
            "description" => $errorDto->description,
            "createdAt" => new DateTime('now'),
            "updatedAt" => null,
            "category" => [
                    "title" => $errorDto->categoryName,
                    "description" => $errorDto->description
            ],
            "utilisateur" => [
                "email" => 'john-dow@email.com'
            ]
            ]);
    }

    // Recupérer toutes les erreurs
    public function findAll()
    {
        return json_encode($this->collection->find([]), PHP_EOL);
    }

    // Recupérer une erreur par son ID
    public function findById(string $id) 
    {
        return json_encode($this->collection->find([
            '_id' => new MongoDB\BSON\ObjectId($id)
        ]), PHP_EOL);
    }

    // Supprimer une erreur par son ID
    public function delete(int $id): void
    {
        $this->collection->deleteOne(
            ['_id' => new MongoDB\BSON\ObjectId($id)]
        );
    }

    // Mettre à jour une erreur par son ID
    public function update(int $id, ErrorDto $errorDto): void
    {
        $this->collection->updateOne(
        ["_id" => new MongoDB\BSON\ObjectId($id)],
        ['$set' => [
            "title" => $errorDto->title,
            "description" => $errorDto->description,
            "createdAt" => $errorDto->createdAt,
            "updatedAt" => $errorDto->updatedAt,
            "category" => [
                    "title" => $errorDto->categoryName,
                    "description" => $errorDto->description
            ],
            "utilisateur" => [
                "email" => 'john-dow@email.com'
            ]
        ]]);
    }
}