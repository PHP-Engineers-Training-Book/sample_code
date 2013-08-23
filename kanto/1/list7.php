<?php
$ret = array_filter(range(1, 10), function($v) {
    return $v % 2 === 0;
});

print_r($ret); // 2, 4, 6, 8, 10
