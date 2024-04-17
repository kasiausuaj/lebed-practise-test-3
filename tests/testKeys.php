<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testKeys extends TestCase
{
    protected $collection;

    protected function setUp(): void
    {
        $this->collection = new Collect([1, 2, 3, 4, 5]);
    }

    public function testKeys()
    {
        $keys = $this->collection->keys()->toArray();
        $expected = [0, 1, 2, 3, 4];
        $this->assertEquals($expected, $keys);
    }
}