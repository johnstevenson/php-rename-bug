<?php

$content = file_get_contents(__FILE__);
$newFile = __DIR__.DIRECTORY_SEPARATOR.'newfile.php';

if (!is_writable(__FILE__)) {
    echo 'Target file is not writable ', __FILE__, PHP_EOL;
    exit(1);
}

if (!file_put_contents($newFile, $content."\n//")) {
    echo 'Unable to create ', $newFile, PHP_EOL;
    exit(1);
}

if (!copy($newFile, __FILE__)) {
    @unlink($newFile);
    echo 'FAILED: unable to copy ', $newFile, ' to ', __FILE__, PHP_EOL;
    exit(1);
}

echo 'SUCCESS: copied ', $newFile, ' to ', __FILE__, PHP_EOL;

exit(0);
