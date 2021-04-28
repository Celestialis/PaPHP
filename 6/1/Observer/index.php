<?php

namespace Observer;

use Observer\Entity\User;
use Observer\Observer\ChangeUserNameObserver;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$user = new User("Pavel","pavel@mail.ru","4",'yes');

$observer1 = new ChangeUserNameObserver();
$observer2 = new ChangeUserEmailObserver();
$observer1 = new ChangeUserExperienceObserver();
$observer2 = new ChangeUserFollowObserver;

$user->attach($observer1);
$user->attach($observer2);

$user->changeName('Павел');
$user->changeEmail("павел@mail.ru");
$user->changeExperience("5");
$user->changeFollow("no");