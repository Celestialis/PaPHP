<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

/**
 * @package Contract
 */
interface RepositoryFactoryInterface
{
    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface;

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface;
}