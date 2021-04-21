<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Redis;

/**
 * @package Repository
 */
abstract class BaseRedisRepository
{
    /**
     * @var Redis
     */
    private $redisConnection;

    /**
     * @param Redis $redisConnection
     */
    public function __construct(Redis $redisConnection)
    {
        $this->redisConnection = $redisConnection;
    }

    /**
     * @return Redis
     */
    public function getRedisConnection(): Redis
    {
        return $this->redisConnection;
    }
}