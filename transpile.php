<?php

require __DIR__.'/vendor/autoload.php';

use Spatie\Php7to5\DirectoryConverter;

$sourceDirectory = __DIR__.'/src/Phpml';
$destinationDirectory = __DIR__.'/src/Phpml';

$converter = new DirectoryConverter($sourceDirectory);
$converter->doNotCopyNonPhpFiles()->savePhp5FilesTo($destinationDirectory);