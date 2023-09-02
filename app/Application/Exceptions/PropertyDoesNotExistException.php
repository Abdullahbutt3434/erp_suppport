<?php

namespace App\Application\Exceptions;

use Exception;
use Throwable;

/**
 *
 */
class PropertyDoesNotExistException extends Exception
{
    public function __construct(string $message = '', ?Throwable $previous = null)
    {
        parent::__construct($message, ExceptionCodes::PROPERTY_DOES_NOT_EXIST, $previous);
    }
}
