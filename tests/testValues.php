<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testValues extends TestCase
{
    protected $collection;

    protected function setUp(): void
    {
        $this->collection = new Collect([1, 2, 3, 4, 5]);
    }
    public function testValues()
    {
        $values = $this->collection->values()->toArray();
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $values);
    }
}