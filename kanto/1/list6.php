<?php
namespace Application;

require_once 'list3.php';
require_once 'list4.php';

use Project1\Foo; // <-(1)
use Application\Project1\Foo as ApplicationFoo; // <-(2)

$obj1 = new Foo();
echo get_class($obj1).PHP_EOL; // Project1\Foo

$obj2 = new ApplicationFoo();
echo get_class($obj2).PHP_EOL; // Application\Project1\Foo

