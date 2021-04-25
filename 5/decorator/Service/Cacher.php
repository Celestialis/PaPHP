<?php

declare(strict_types=1);

namespace Decorator\Service;

use Decorator\Entity\User;

class Cacher
{
    /**
     * @var array
     */
    private $cached = [];

    /**
     * Cacher constructor.
     */
    public function __construct()
    {
        // Имитируем что в кеше что-то есть, просто для примера.
        $this->cached = [
            'User:id:1' => new User(1, 'Павел'),
            'User:id:2' => new User(2, 'Андрей'),
            'User:name:Павел' => new User(1, 'Павел'),
        ];
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public function findByKey(string $key)
    {
        if (array_key_exists($key, $this->cached)) {
            return $this->cached[$key];
        }
        return null;
    }
}