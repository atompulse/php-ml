<?php

namespace Phpml\Exception;

class DatasetException extends \Exception
{
    /**
     * @param string $path
     *
     * @return DatasetException
     */
    public static function missingFolder($path)
    {
        return new self(sprintf('Dataset root folder "%s" missing.', $path));
    }
}