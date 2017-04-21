<?php

namespace Phpml\Dataset;

interface Dataset
{
    /**
     * @return array
     */
    public function getSamples();
    /**
     * @return array
     */
    public function getTargets();
}