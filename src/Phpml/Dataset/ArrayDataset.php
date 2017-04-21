<?php

namespace Phpml\Dataset;

use Phpml\Exception\InvalidArgumentException;
class ArrayDataset implements Dataset
{
    /**
     * @var array
     */
    protected $samples = [];
    /**
     * @var array
     */
    protected $targets = [];
    /**
     * @param array $samples
     * @param array $targets
     *
     * @throws InvalidArgumentException
     */
    public function __construct(array $samples, array $targets)
    {
        if (count($samples) != count($targets)) {
            throw InvalidArgumentException::arraySizeNotMatch();
        }
        $this->samples = $samples;
        $this->targets = $targets;
    }
    /**
     * @return array
     */
    public function getSamples()
    {
        return $this->samples;
    }
    /**
     * @return array
     */
    public function getTargets()
    {
        return $this->targets;
    }
}