<?php

namespace Phpml\NeuralNetwork;

interface Network
{
    /**
     * @param mixed $input
     *
     * @return self
     */
    public function setInput($input);
    /**
     * @return array
     */
    public function getOutput();
    /**
     * @param Layer $layer
     */
    public function addLayer(Layer $layer);
    /**
     * @return Layer[]
     */
    public function getLayers();
}