<?php
$hash = password_hash('password', PASSWORD_DEFAULT);
echo 'hash:'.$hash.PHP_EOL;

$input = 'password';

if (password_verify($input, $hash)) {
    echo 'valid'.PHP_EOL;
} else {
    echo 'invalid'.PHP_EOL;
}
