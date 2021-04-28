<?php

declare(strict_types=1);

namespace Strategy\Contract;

interface PayInterface
{
    public function getId(): int;

    public function getSum(): float;

    public function getNumber(): bigint;

    public function getPay(): string;
}