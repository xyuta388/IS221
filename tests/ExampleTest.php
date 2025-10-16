<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testBasicMath()
    {
        $this->assertEquals(4, 2 + 2);
        $this->assertTrue(1 < 2);
    }
    
    public function testStringOperations()
    {
        $name = "Internet Shop";
        $this->assertEquals("Internet Shop", $name);
    }
}
