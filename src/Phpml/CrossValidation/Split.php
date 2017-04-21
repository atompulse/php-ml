<?php

namespace Phpml\CrossValidation;

use Phpml\Dataset\Dataset;
use Phpml\Exception\InvalidArgumentException;
abstract class Split
{
    /**
     * @var array
     */
    protected $trainSamples = [];
    /**
     * @var array
     */
    protected $testSamples = [];
    /**
     * @var array
     */
    protected $trainLabels = [];
    /**
     * @var array
     */
    protected $testLabels = [];
    /**
     * @param Dataset $dataset
     * @param float   $testSize
     * @param int     $seed
     *
     * @throws InvalidArgumentException
     */
    public function __construct(Dataset $dataset, $testSize = 0.3, $seed = null)
    {
        if (0 >= $testSize || 1 <= $testSize) {
            throw InvalidArgumentException::percentNotInRange('testSize');
        }
        $this->seedGenerator($seed);
        $this->splitDataset($dataset, $testSize);
    }
    protected abstract function splitDataset(Dataset $dataset, $testSize);
    /**
     * @return array
     */
    public function getTrainSamples()
    {
        return $this->trainSamples;
    }
    /**
     * @return array
     */
    public function getTestSamples()
    {
        return $this->testSamples;
    }
    /**
     * @return array
     */
    public function getTrainLabels()
    {
        return $this->trainLabels;
    }
    /**
     * @return array
     */
    public function getTestLabels()
    {
        return $this->testLabels;
    }
    /**
     * @param int|null $seed
     */
    protected function seedGenerator($seed = null)
    {
        if (null === $seed) {
            mt_srand();
        } else {
            mt_srand($seed);
        }
    }
}