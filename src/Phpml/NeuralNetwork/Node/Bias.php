<?php

namespace Phpml\NeuralNetwork\Node;

use Phpml\NeuralNetwork\Node;
class Bias implements Node
{
    /**
     * @return float
     */
    public function getOutput()
    {
        return 1.0;
    }
}