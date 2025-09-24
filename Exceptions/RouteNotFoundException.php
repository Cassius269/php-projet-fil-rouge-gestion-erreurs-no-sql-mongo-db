<?php

namespace Exceptions;

use Exception;

class RouteNotFoundException extends \Exception
{
    public function __construct(string $message = "Route introuvable", int $code = 404)
        {
            parent::__construct($message, $code);
        }
}