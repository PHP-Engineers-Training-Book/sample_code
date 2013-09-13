<?php
class MyFirstTest extends PHPUnit_Framework_TestCase
{
    /**
     * array_mapがクロージャでうまく動くかどうか
     */
    public function testArrayMapWithClosure()
    {
        $input = [1, 2, 3];
        $result = array_map(function($e) {
            return $e + 1;
        }, $input);
        $this->assertEquals([2, 3, 4], $result);
    }
}

