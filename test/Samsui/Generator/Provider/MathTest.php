<?php

namespace Samsui\Generator\Provider;

use \PHPUnit_Framework_TestCase;

class MathnTest extends PHPUnit_Framework_TestCase
{
    public function testBetween()
    {
        $provider = new Math();
        $number = $provider->between(1, 4);
        $this->assertInternalType('int', $number);
        $this->assertTrue($number >= 1 && $number <= 4);
    }

    public function testRandomNumber()
    {
        $provider = new Math();
        $number = $provider->randomNumber(8);
        $this->assertInternalType('int', $number);
        $this->assertEquals(8, strlen((string)$number));
    }

    public function testRandomDigit()
    {
        $provider = new Math();
        $number = $provider->randomDigit();
        $this->assertInternalType('int', $number);
        $this->assertEquals(1, strlen((string)$number));
        $this->assertTrue($number >= 0 && $number <= 9);
    }

    public function testRandomDigitNonZero()
    {
        $provider = new Math();
        $number = $provider->randomDigitNonZero();
        $this->assertInternalType('int', $number);
        $this->assertEquals(1, strlen((string)$number));
        $this->assertTrue($number >= 1 && $number <= 9);
    }

    public function testRandomAlphabet()
    {
        $provider = new Math();
        $char = $provider->randomAlphabet();
        $this->assertInternalType('string', $char);
        $this->assertEquals(1, strlen($char));
        $this->assertTrue(ord($char) >= 97 && ord($char) <= 122);
    }

    public function testRandomArrayKey()
    {
        $provider = new Math();
        $array = array('a', 'b', 'c');
        $key = $provider->randomArrayKey($array);
        $this->assertTrue(isset($array[$key]));
        $this->assertInternalType('int', $key);
    }

    public function testRandomArrayKeyNull()
    {
        $provider = new Math();
        $array = array();
        $key = $provider->randomArrayKey($array);
        $this->assertNull($key);
    }

    public function testRandomArrayValue()
    {
        $provider = new Math();
        $array = array('a', 'b', 'c');
        $value = $provider->randomArrayValue($array);
        $this->assertTrue(in_array($value, $array));
        $this->assertInternalType('string', $value);
    }
}
