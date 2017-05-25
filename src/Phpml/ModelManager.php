<?php

namespace Phpml;

use Phpml\Exception\SerializeException;
use Phpml\Exception\FileException;
class ModelManager
{
    /**
     * @param Estimator $estimator
     * @param string    $filepath
     *
     * @throws FileException
     * @throws SerializeException
     */
    public function saveToFile(Estimator $estimator, $filepath)
    {
        if (!is_writable(dirname($filepath))) {
            throw FileException::cantSaveFile(basename($filepath));
        }
        $serialized = serialize($estimator);
        if (empty($serialized)) {
            throw SerializeException::cantSerialize(gettype($estimator));
        }
        $result = file_put_contents($filepath, $serialized, LOCK_EX);
        if ($result === false) {
            throw FileException::cantSaveFile(basename($filepath));
        }
    }
    /**
     * @param string $filepath
     *
     * @return Estimator
     *
     * @throws FileException
     * @throws SerializeException
     */
    public function restoreFromFile($filepath)
    {
        if (!file_exists($filepath) || !is_readable($filepath)) {
            throw FileException::cantOpenFile(basename($filepath));
        }
        $object = unserialize(file_get_contents($filepath));
        if ($object === false) {
            throw SerializeException::cantUnserialize(basename($filepath));
        }
        return $object;
    }
}