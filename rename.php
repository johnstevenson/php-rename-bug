<?php

$content = file_get_contents(__FILE__);
$newFile = __DIR__.DIRECTORY_SEPARATOR.'newfile.php';

if (!file_put_contents($newFile, $content."\n//")) {
    echo 'Unable to create ', $newFile, PHP_EOL;
}

if (!rename($newFile, __FILE__)) {
    @unlink($newFile);
    echo 'FAILED: Unable to rename ', $newFile, ' to ', __FILE__, PHP_EOL;
    exit(1);
}

echo 'SUCCESS: renamed ', $newFile, ' to ', __FILE__, PHP_EOL;

exit(0);
