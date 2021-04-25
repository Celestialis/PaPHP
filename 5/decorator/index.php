<?php

namespace Decorator;

use Decorator\Repository\UserCacheRepository;
use Decorator\Repository\UserRepository;
use Decorator\Service\Cacher;
use Decorator\Service\UserService;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Decorator/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$userService = new UserService(new UserRepository());
$userCacheService = new UserService(
    new UserCacheRepository(
        new Cacher(),
        new UserRepository()
    )
);


$userService->findByName('Павел');
$userService->findByName('Андрей');
echo "------------------\n";
$userCacheService->findByName('Павел');
$userCacheService->findByName('Андрей');