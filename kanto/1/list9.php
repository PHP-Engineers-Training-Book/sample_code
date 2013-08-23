<?php
$name = 'Jun';

$func = function ($message) use ($name) {
    echo $message.' '.$name.PHP_EOL;
};

$func('Hello!'); // Hello Jun!
$name = 'Mike';  // <-(1)
$func('Hello!'); // Hello Jun!

