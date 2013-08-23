<?php
class Foo
{
    const VALUE = 'VFOO';

    public static function say()
    {
        echo static::getName().static::VALUE.PHP_EOL;
    }

    protected static function getName()
    {
        return __CLASS__;
    }
}

class Bar extends Foo
{
    const VALUE = 'VBAR';

    protected static function getName()
    {
        return __CLASS__;
    }
}

$obj = new Bar();
$obj::say(); // BarVBAR
