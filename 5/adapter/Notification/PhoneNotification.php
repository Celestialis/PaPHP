<?php

declare(strict_types=1);

namespace Adapter\Notification;

use Adapter\Contract\NotifiableInterface;
use Adapter\Contract\NotificationInterface;
use Adapter\Service\PhoneApi;


class PhoneNotification implements NotificationInterface
{
    /**
     * @var PhoneApi
     */
    private $phoneApi;

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
     * @param PhoneApi $phoneApi
     * @param NotifiableInterface $notifiable
     * @param string $title
     * @param string $message
     */
    public function __construct(
        PhoneApi $phoneApi,
        NotifiableInterface $notifiable,
        string $title,
        string $message
    ) {
        
        $this->phoneApi = $phoneApi;
        $this->notifiable = $notifiable;
        $this->title = $title;
        $this->message = $message;
    }

    public function send(): void
    {
        $message = $this->title . " " . strip_tags($this->message);
        $this->phoneApi->createConnection();
        $this->phoneApi->sendMessage($this->notifiable->getPhone(), $message);
    }
}