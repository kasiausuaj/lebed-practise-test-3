<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
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

    public function testValues()
    {
        $values = $this->collection->values()->toArray();
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $values);
    }

    public function testGet()
    {
        $value = $this->collection->get(2);
        $this->assertEquals(3, $value);

        $value = $this->collection->get(5);
        $this->assertNull($value); // Ожидаем null, если ключ не существует

        $defaultValue = "default";
        $value = $this->collection->get(6, $defaultValue);
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