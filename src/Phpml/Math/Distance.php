<?php

namespace Phpml\Math;

interface Distance
{
    /**
     * @param array $a
     * @param array $b
     *
     * @return float
     */
    public function distance(array $a, array $b);
}