<?php

declare(strict_types=1);

namespace Adapter\Contract;

interface NotifiableInterface
{
    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getPhone(): string;
}