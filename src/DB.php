<?php

namespace App;

use MongoDB\Client;
use MongoDB\Exception\Exception;

class DB {
    private string $host = 'mongodb://127.0.0.1:27017';
    public ?Client $client = null;

    public function  __construct(){
        try {
            $this->client = new Client($this->host);
        }catch(Exception $e){
            echo 'Erreur de connexion '. $e->getMessage();
        }
    }
}