<?php

namespace Phpml;

interface IncrementalEstimator
{
    /**
     * @param array $samples
     * @param array $targets
     * @param array $labels
     */
    public function partialTrain(array $samples, array $targets, array $labels = []);
}