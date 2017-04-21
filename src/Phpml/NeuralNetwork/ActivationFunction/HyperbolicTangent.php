<?php

namespace Phpml\NeuralNetwork\ActivationFunction;

use Phpml\NeuralNetwork\ActivationFunction;
class HyperbolicTangent implements ActivationFunction
{
    /**
     * @var float
     */
    private $beta;
    /**
     * @param float $beta
     */
    public function __construct($beta = 1.0)
    {
        $this->beta = $beta;
    }
    /**
     * @param float|int $value
     *
     * @return float
     */
    public function compute($value)
    {
        return tanh($this->beta * $value);
    }
}