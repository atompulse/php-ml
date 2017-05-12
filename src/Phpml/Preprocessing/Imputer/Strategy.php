<?php

namespace Phpml\Preprocessing\Imputer;

interface Strategy
{
    /**
     * @param array $currentAxis
     *
     * @return mixed
     */
    public function replaceValue(array $currentAxis);
}