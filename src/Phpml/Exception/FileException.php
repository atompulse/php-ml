<?php

namespace Phpml\Exception;

class FileException extends \Exception
{
    /**
     * @param string $filepath
     *
     * @return FileException
     */
    public static function missingFile($filepath)
    {
        return new self(sprintf('File "%s" missing.', $filepath));
    }
    /**
     * @param string $filepath
     *
     * @return FileException
     */
    public static function cantOpenFile($filepath)
    {
        return new self(sprintf('File "%s" can\'t be open.', $filepath));
    }
    /**
     * @param string $filepath
     *
     * @return FileException
     */
    public static function cantSaveFile($filepath)
    {
        return new self(sprintf('File "%s" can\'t be saved.', $filepath));
    }
}