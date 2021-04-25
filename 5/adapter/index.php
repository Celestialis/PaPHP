<?php

namespace Adapter;

use Adapter\Entity\User;
use Adapter\Contract\Notification;
use Adapter\Notification\EmailNotification;
use Adapter\Service\PhoneApi;
use Adapter\Notification\PhoneNotification;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});

/**
 * @param Notification[] $notifications
 */
function sendNotification(array $notifications)
{
    foreach ($notifications as $notification) {
        $notification->send();
    }
}

$user = new User('mail@examle.com', '+78008008008');
$phoneApi = new PhoneApi('secretKey');

$notifications = [
    new EmailNotification($user, 'Привет!', 'Приходи в гости!'),
    new PhoneNotification($phoneApi, $user, 'Привет!', 'Приходи в гости!')
];

sendNotification($notifications);