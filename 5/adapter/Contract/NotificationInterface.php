<?php

declare(strict_types=1);

namespace Adapter\Contract;

interface NotificationInterface
{
    public function send(): void;
}