<?php

use Even\Helper;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    public function testIsEvenReturnsEvenMessage()
    {
        $result = Helper::isEven(4);
        $this->assertEquals("The value 4 is even.", $result);
    }

    public function testIsEvenReturnsOddMessage()
    {
        $result = Helper::isEven(3);
        $this->assertEquals("The value 3 is not even.", $result);
    }

    public function testIsEvenHandlesNonInteger()
    {
        $result = Helper::isEven("abc");
        $this->assertEquals("The provided value is not a valid integer.", $result);
    }

    public function testIsEvenHandlesNull()
    {
        $result = Helper::isEven();
        $this->assertEquals("Please provide a value to check.", $result);
    }
}
