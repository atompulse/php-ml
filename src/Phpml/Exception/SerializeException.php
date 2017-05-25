<?php

namespace Phpml\Exception;

class SerializeException extends \Exception
{
    /**
     * @param string $filepath
     *
     * @return SerializeException
     */
    public static function cantUnserialize($filepath)
    {
        return new self(sprintf('"%s" can not be unserialized.', $filepath));
    }
    /**
     * @param string $classname
     *
     * @return SerializeException
     */
    public static function cantSerialize($classname)
    {
        return new self(sprintf('Class "%s" can not be serialized.', $classname));
    }
}