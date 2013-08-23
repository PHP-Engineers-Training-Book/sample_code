<?php
// application.php
namespace Application;

require_once 'list3.php';
require_once 'list4.php';

class Foo
{
}

$obj1 = new \Project1\Foo(); // <-(1)
echo get_class($obj1).PHP_EOL; // Project1\Foo

//$obj2 = new Project1･Foo(); // <-(2)
//echo get_class($obj2).PHP_EOL; // Application\Project1\Foo

$obj3 = new Foo(); // <-(3)
echo get_class($obj3).PHP_EOL; // Application\Foo

$e = new \Exception(); // <-(4)
echo get_class($e).PHP_EOL; // Exception

