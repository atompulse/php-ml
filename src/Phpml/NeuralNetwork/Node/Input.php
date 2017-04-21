<?php

namespace Phpml\NeuralNetwork\Node;

use Phpml\NeuralNetwork\Node;
class Input implements Node
{
    /**
     * @var float
     */
    private $input;
    /**
     * @param float $input
     */
    public function __construct($input = 0.0)
    {
        $this->input = $input;
    }
    /**
     * @return float
     */
    public function getOutput()
    {
        return $this->input;
    }
    /**
     * @param float $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }
}