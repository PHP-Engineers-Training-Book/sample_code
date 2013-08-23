<?php
function primes() {
    $i = 2;
    $list = [];

    $is_prime = function ($i, $list) {
        foreach ($list as $v) {
            if ($i % $v === 0) {
                return false;
            }
        }

        return true;
    };

    while (true) {
        if ($is_prime($i, $list)) {
            yield $i;
            $list[] = $i;
        }

        $i++;
    }
}

foreach (primes() as $v) {
    if ($v > 100) break; // <-(1)
    echo $v.PHP_EOL;
}
