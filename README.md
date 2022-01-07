Demonstrates a bug on Windows PHP 8.1 where `rename` fails if the target file is the file being
executed (even though it is writable). This did not happen on earlier PHP versions.
