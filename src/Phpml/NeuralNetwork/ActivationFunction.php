<?php

namespace Phpml\NeuralNetwork;

interface ActivationFunction
{
    /**
     * @param float|int $value
     *
     * @return float
     */
    public function compute($value);
}