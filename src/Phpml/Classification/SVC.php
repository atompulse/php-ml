<?php

namespace Phpml\Classification;

use Phpml\SupportVectorMachine\Kernel;
use Phpml\SupportVectorMachine\SupportVectorMachine;
use Phpml\SupportVectorMachine\Type;
class SVC extends SupportVectorMachine implements Classifier
{
    /**
     * @param int        $kernel
     * @param float      $cost
     * @param int        $degree
     * @param float|null $gamma
     * @param float      $coef0
     * @param float      $tolerance
     * @param int        $cacheSize
     * @param bool       $shrinking
     * @param bool       $probabilityEstimates
     */
    public function __construct($kernel = Kernel::LINEAR, $cost = 1.0, $degree = 3, $gamma = null, $coef0 = 0.0, $tolerance = 0.001, $cacheSize = 100, $shrinking = true, $probabilityEstimates = false)
    {
        parent::__construct(Type::C_SVC, $kernel, $cost, 0.5, $degree, $gamma, $coef0, 0.1, $tolerance, $cacheSize, $shrinking, $probabilityEstimates);
    }
}