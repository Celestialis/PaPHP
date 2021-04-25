<?php

declare(strict_types=1);

namespace Decorator\Repository;

use Decorator\Contract\UserRepositoryInterface;
use Decorator\Entity\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param int $id
     * @return User
     */
    public function getById(int $id): User
    {
        echo "Достаем пользователя по id=$id из базы.\n";

        // Далее просто для примера, в настоящем проекте мы обы обращались к БД.
        if ($id === 1) {
            return new User(1, 'Павел');
        } elseif ($id === 2) {
            return new User(2, 'Андрей');
        }

        throw new \DomainException('Can\'t find user by id.');
    }

    /**
     * @param string $name
     * @return User
     */
    public function findByName(string $name): User
    {
        echo "Достаем пользователя по name=$name из базы.\n";

        // Далее просто для примера, в настоящем проекте мы обы обращались к БД.
        if ($name === 'Павел') {
            return new User(1, 'Павел');
        } elseif ($name === 'Андрей') {
            return new User(2, 'Андрей');
        }

        return null;
    }
}