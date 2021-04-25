<?php



declare(strict_types=1);

namespace Adapter\Entity;

use Adapter\Contract\ICircle;

/**
 * @package Adapter\Entity
 */

class SquareAreaLib implements ICircle
{
   public function getSquareArea(int $diagonal)
   {
       $area = ($diagonal**2)/2;

       return $area;
   }
}