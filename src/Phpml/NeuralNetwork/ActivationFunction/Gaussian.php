<?php

namespace Phpml\NeuralNetwork\ActivationFunction;

use Phpml\NeuralNetwork\ActivationFunction;
class Gaussian implements ActivationFunction
{
    /**
     * @param float|int $value
     *
     * @return float
     */
    public function compute($value)
    {
        return exp(-pow($value, 2));
    }
}