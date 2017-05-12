<?php

namespace Phpml\Clustering;

interface Clusterer
{
    /**
     * @param array $samples
     *
     * @return array
     */
    public function cluster(array $samples);
}