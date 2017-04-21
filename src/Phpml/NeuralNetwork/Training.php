<?php

namespace Phpml\NeuralNetwork;

interface Training
{
    /**
     * @param array $samples
     * @param array $targets
     * @param float $desiredError
     * @param int   $maxIterations
     */
    public function train(array $samples, array $targets, $desiredError = 0.001, $maxIterations = 10000);
}