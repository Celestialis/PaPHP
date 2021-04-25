<?php

declare(strict_types=1);

namespace Adapter\Entity;

use Adapter\Contract\ISquare;

/**
 * @package Adapter\Entity
 */
class CircleAreaLib implements ISquare
{
   public function getCircleArea(int $diagonal)
   {
       $area = (M_PI * $diagonal**2))/4;

       return $area;
   }
}