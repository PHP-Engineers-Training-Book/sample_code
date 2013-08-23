<?php
function counter() {
  $i = 0;

  return function () use (&$i) { // <-(1)
      $i++;
      return $i;
  };
}

$counter = counter();
echo $counter().PHP_EOL; // 1
echo $counter().PHP_EOL; // 2
echo $counter().PHP_EOL; // 3
