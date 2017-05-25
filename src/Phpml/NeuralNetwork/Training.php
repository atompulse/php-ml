<?php

namespace Phpml\NeuralNetwork;

interface Training
{
    /**
     * @param array $samples
     * @param array $targets
     */
    public function train(array $samples, array $targets);
}