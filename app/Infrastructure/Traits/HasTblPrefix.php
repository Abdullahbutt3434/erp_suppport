<?php

namespace App\Infrastructure\Traits;

use App\Application\Exceptions\PropertyDoesNotExistException;
use Exception;

/**
 *
 */
trait HasTblPrefix
{
    /**
     * Get the current connection name for the model.
     *
     * @throws Exception
     */
    public function getConnectionName(): ?string
    {
        return $this->getConfigClass()::$connection ?? config('database.default');
    }

    /**
     * @throws Exception
     */
    private function getConfigClass(): string
    {
        if (class_exists($this->config)) {
            return $this->config;
        }
        throw new PropertyDoesNotExistException('The "protected $config" in ' . static::class . ' class does not exist!');
    }

    public function getTable(): string
    {
        if (count(explode('.', parent::getTable())) === 2) {
            return parent::getTable();
        }

        return $this->getConfigClass()::$schema . '.' . parent::getTable();
    }
}
