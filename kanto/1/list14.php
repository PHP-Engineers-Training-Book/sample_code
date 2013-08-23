<?php
trait TFoo
{
    public function hello()
    {
        echo 'TFoo'.PHP_EOL;
    }
}

trait TBar
{
    public function hello()
    {
        echo 'TBar'.PHP_EOL;
    }
}

class MyClass
{
    use TFoo, TBar {
        TBar::hello insteadof TFoo; // <-(1)
        TFoo::hello as tfoo_hello;  // <-(2)
    }
}

$obj = new MyClass();
$obj->hello(); // TBar
$obj->tfoo_hello(); // TFoo
