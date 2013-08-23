<?php
class Foo
{
    public $public1 = true;
    protected $protected1 = 'name';
    private $private1 = [
      'id' => 1,
      'name' => 'name1',
    ];
}

$foo = new Foo();
var_dump($foo);
