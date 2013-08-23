<?php
function divide($number, $divisor) {
    if ($divisor === 0) {
        throw new \Exception('divisor is 0');
    }

    return $number / $divisor;
}

try {
    // 正常系処理
    echo divide(10, 0).PHP_EOL;
} catch (\Exception $e) {
    // 異常系処理
    echo $e;
}

