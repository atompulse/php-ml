<?php

namespace Phpml\Math\Distance;

use Phpml\Exception\InvalidArgumentException;
use Phpml\Math\Distance;
class Euclidean implements Distance
{
    /**
     * @param array $a
     * @param array $b
     *
     * @return float
     *
     * @throws InvalidArgumentException
     */
    public function distance(array $a, array $b)
    {
        if (count($a) !== count($b)) {
            throw InvalidArgumentException::arraySizeNotMatch();
        }
        $distance = 0;
        foreach ($a as $i => $val) {
            $distance += ($val - $b[$i]) ** 2;
        }
        return sqrt((double) $distance);
    }
}