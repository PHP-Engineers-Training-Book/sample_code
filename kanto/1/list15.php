<?php
function func(array $array) {
    print_r($array);
}

// array
$value = array(
    array(
        'name' => 'Bob',
        'code' => 'A0001',
    )
);
func(array(1, 2, 3));

// []による短縮構文
$value = [
    [
        'name' => 'Bob',
        'code' => 'A0001',
    ]
];
func([1, 2, 3]);
