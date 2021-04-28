<?php

declare(strict_types=1);

namespace Strategy\Entity;

use Strategy\Contract\ComparatorableInterface;

class Pay implements PayInterface {
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $sum;

    /**
     * @var bigint
     */
    private $number;

    /**
     * @var string
     */
    private $pay;

    /**
     * Order constructor.
     * @param int $id
     * @param float $sum
     * @param int $number
     * @param string $pay
     */
    public function __construct(int $id, float $sum, DateTime $pay)
    {
        $this->id = $id;
        $this->sum = $sum;
        $this->number = $number;
        $this->pay = $pay;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }

    /**
     * @return bigint
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getPay(): string
    {
        return $this->pay;
    }

}