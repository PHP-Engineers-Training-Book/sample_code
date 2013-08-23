<?php
trait TFoo
{
    public function foo()
    {
        echo 'TFoo'.PHP_EOL;
    }
}

trait TBar
{
    public function bar()
    {
        echo 'TBar'.PHP_EOL;
    }
}

class MyClass
{
    use TFoo, TBar;
}

$obj = new MyClass();
$obj->foo(); // TFoo

