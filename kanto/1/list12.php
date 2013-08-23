<?php
trait TSay
{
    protected $greeting = 'Hello';

    public function say()
    {
        echo $this->greeting.' '.$this->name.PHP_EOL;
    }
}

class Foo
{
    use TSay;

    protected $name = null;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$obj = new Foo('Bob');
$obj->say(); // Hello Bob
