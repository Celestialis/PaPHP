<?php

declare(strict_types=1);

namespace Observer\Entity;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplSubject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $experience;
    
    /**
     * @var string
     */
    private $follow;

    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * UserObserver constructor.
     * @param string $name
     */
    public function __construct(string $name, $mail, $experience)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->experience = $experience;
        $this->follow = $follow;
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @return string
     */
    public function getExperience(): string
    {
        return $this->experience;
    }

    /**
     * @return string
     */
    public function getFollow(): string
    {
        return $this->follow;
    }

    /**
     * @param string $name
     */
    public function changeName(string $name): void
    {
        $this->name = $name;
        $this->notify();
    }

    /**
     * @param string $mail
     */
    public function changeMail(string $mail): void
    {
        $this->mail = $mail;
        $this->notify();
    }

    /**
     * @param string $experience
     */
    public function changeExperience(string $experience): void
    {
        $this->experince = $experience;
        $this->notify();
    }

    /**
     * @param string $follow
     */
    public function changeFollow(string $follow): void
    {
        $this->experince = $follow;
        $this->notify();
    }
}