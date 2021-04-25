<?php

declare(strict_types=1);

namespace Adapter\Notification;

use Adapter\Contract\NotifiableInterface;
use Adapter\Contract\NotificationInterface;


class EmailNotification implements NotificationInterface
{
    /**
     * @var NotifiableInterface
     */
    private $notifiable;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $message;

    /**
     * @param NotifiableInterface $notifiable
     * @param string $title
     * @param string $message
     */
    public function __construct(
        NotifiableInterface $notifiable,
        string $title,
        string $message
    ) {
        $this->notifiable = $notifiable;
        $this->title = $title;
        $this->message = $message;
    }

    public function send(): void
    {
        // mail($this->adminEmail, $title, $message);
        echo "Посылаем email с заголовком '$this->title' по адресу "
            . "'{$this->notifiable->getEmail()}' с сообщением "
            . "'$this->message'.\n";
    }
}