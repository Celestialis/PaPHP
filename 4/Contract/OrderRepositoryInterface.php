<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\Order;

/**
 * @package Contract
 */
interface OrderRepositoryInterface
{
    /**
     * @param Order $order
     * @return void
     */
    public function add(Order $order);

    /**
     * @param Order $order
     * @return void
     */
    public function delete(Order $order);

    /**
     * @param Order $order
     * @return void
     */
    public function update(Order $order);
}