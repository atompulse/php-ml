<?php

namespace Phpml\Regression;

use Phpml\SupportVectorMachine\Kernel;
use Phpml\SupportVectorMachine\SupportVectorMachine;
use Phpml\SupportVectorMachine\Type;
class SVR extends SupportVectorMachine implements Regression
{
    /**
     * @param int        $kernel
     * @param int        $degree
     * @param float      $epsilon
     * @param float      $cost
     * @param float|null $gamma
     * @param float      $coef0
     * @param float      $tolerance
     * @param int        $cacheSize
     * @param bool       $shrinking
     */
    public function __construct($kernel = Kernel::RBF, $degree = 3, $epsilon = 0.1, $cost = 1.0, $gamma = null, $coef0 = 0.0, $tolerance = 0.001, $cacheSize = 100, $shrinking = true)
    {
        parent::__construct(Type::EPSILON_SVR, $kernel, $cost, 0.5, $degree, $gamma, $coef0, $epsilon, $tolerance, $cacheSize, $shrinking, false);
    }
}