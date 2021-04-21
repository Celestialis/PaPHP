<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\RedisUserRepository;
use AbstractFactory\Repository\RedisOrderRepository;
use AbstractFactory\Db\Redis;

/**
 * @package Factory
 */
class RedisRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var Redis
     */
    private $redisConnection;

    /**
     * @param Redis $postgresConnection
     */
    public function __construct(Redis $postgresConnection)
    {
        $this->redisConnection = $postgresConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface
    {
        return new RedisUserRepository($this->redisConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new RedisOrderRepository($this->redisConnection);
    }
}