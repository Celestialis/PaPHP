<?php

declare(strict_types=1);

namespace Adapter\Entity;

use Adapter\Contract\NotifiableInterface;

/**
 * @package Adapter\Entity
 */
class User implements NotifiableInterface
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @param string $email
     * @param string $phone
     */
    public function __construct(string $email, string $phone)
    {
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
}