<?php

namespace Phpml\Math;

interface Kernel
{
    /**
     * @param float $a
     * @param float $b
     *
     * @return float
     */
    public function compute($a, $b);
}