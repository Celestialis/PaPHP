<?php

declare(strict_types=1);

namespace Decorator\Repository;

use Decorator\Contract\UserRepositoryInterface;
use Decorator\Entity\User;
use Decorator\Service\Cacher;

class UserCacheRepository implements UserRepositoryInterface
{
    /**
     * @var Cacher
     */
    private $cacher;

    /**
     * @var UserRepositoryInterface
     */
    private $repository;

    /**
     * UserCacheRepository constructor.
     * @param Cacher $cacher
     * @param UserRepositoryInterface $repository
     */
    public function __construct(
        Cacher $cacher,
        UserRepositoryInterface $repository
    ) {
        $this->cacher = $cacher;
        $this->repository = $repository;
    }

    /**
     * @param int $id
     * @return string
     */
    private function getByIdKey(int $id): string
    {
        return 'User:id:' . $id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function getById(int $id): User
    {
        echo "Достаем пользователя по id=$id из кеша.\n";

        $fromCache = $this->cacher->findByKey($this->getByIdKey($id));
        if ($fromCache === null) {
            return $this->repository->getById($id);
        }

        return $fromCache;
    }

    /**
     * @param string $name
     * @return string
     */
    private function getByNameKey(string $name): string
    {
        return 'User:name:' . $name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function findByName(string $name): User
    {
        echo "Достаем пользователя по name=$name из кеша.\n";

        $fromCache = $this->cacher->findByKey($this->getByNameKey($name));
        if ($fromCache === null) {
            return $this->repository->findByName($name);
        }

        return $fromCache;
    }
}