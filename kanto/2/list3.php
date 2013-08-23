<?php
class Foo
{
      public function hello()
      {
          throw new \Exception();
      }
}

class Bar
{
    public function hello(Foo $foo)
    {
        $foo->hello();
    }
}

$foo = new Foo();
$bar = new Bar();
$bar->hello($foo);
