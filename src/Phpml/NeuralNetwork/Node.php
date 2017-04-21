<?php

namespace Phpml\NeuralNetwork;

interface Node
{
    /**
     * @return float
     */
    public function getOutput();
}