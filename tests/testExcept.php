<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testExcept extends TestCase
{
    protected $collection;

    protected function setUp(): void
    {
        $this->collection = new Collect([1, 2, 3, 4, 5]);
    }
    public function testExcept()
    {
        $collection = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $excepted = $collection->except('a')->toArray();
        $expected = ['b' => 2, 'c' => 3];
        $this->assertEquals($expected, $excepted);

        $excepted = $collection->except(['a', 'c'])->toArray();
        $expected = ['b' => 2];
        $this->assertEquals($expected, $excepted);
    }
}