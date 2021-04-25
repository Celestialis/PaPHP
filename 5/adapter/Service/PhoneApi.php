<?php

declare(strict_types=1);

namespace Adapter\Service;


class PhoneApi
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function createConnection(): void
    {
        echo "Создаем коннект к api сервиса по отправке SMS.\n";
    }

    public function sendMessage(string $number, string $message): void
    {
        echo "Отправляем SMS на номер '$number' с сообщением: '$message'.\n";
    }
}