<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\User;

/**
 * @package Contract
 */
interface UserRepositoryInterface
{
    /**
     * @param User $user
     * @return void
     */
    public function add(User $user);

    /**
     * @param User $user
     * @return void
     */
    public function delete(User $user);

    /**
     * @param User $user
     * @return void
     */
    public function update(User $user);
}