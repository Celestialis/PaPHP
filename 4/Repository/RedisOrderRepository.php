<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

/**
 * @package Repository
 */
class RedisOrderRepository extends BaseRedisRepository
    implements OrderRepositoryInterface
{
    /**
     * @param Order $order
     */
    public function add(Order $order)
    {
        echo 'Добавляем в redis заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function delete(Order $order)
    {
        echo 'Удаляем в redis заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        echo 'Обновляем в redis заказ $order.' . PHP_EOL;
    }
}