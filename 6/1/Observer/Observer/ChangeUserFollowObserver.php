<?php

declare(strict_types=1);

namespace Observer\Observer;

use Observer\Entity\User;
use SplObserver;

class ChangeUserFollowObserver implements SplObserver
{
    /**
     * Метод вызывается, когда происходит вызов notify() у субъекта, за которым
     * наблюдаем. В нашем случае мы наблюдаем за User.
     * @param User $subject
     */
    public function update($subject)
    {
        echo "У пользователя сменился статус-подписки на '{$subject->getFollow()}'.\n";
    }
}