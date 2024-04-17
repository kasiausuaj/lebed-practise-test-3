<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testGet extends TestCase
{
    protected $collection;

    protected function setUp(): void
    {
        $this->collection = new Collect([1, 2, 3, 4, 5]);
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
}