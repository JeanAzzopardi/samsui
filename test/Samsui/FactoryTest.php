<?php

namespace Samsui;

use \PHPUnit_Framework_TestCase;

class FactoryTest extends PHPUnit_Framework_TestCase
{
    public function testDefine()
    {
        $factory = new Factory();
        $definition = $factory->define('test');
        $definition2 = $factory->define('test');
        $this->assertEquals($definition, $definition2);
        $this->assertInstanceOf('Samsui\\Definition', $definition);
    }

    public function testOneBuild()
    {
        $factory = new Factory();
        $definition = $factory->define('test');
        $object = $factory->build('test');
        $this->assertInstanceOf('Samsui\\Wrapper', $object);
    }

    public function testMultipleBuild()
    {
        $factory = new Factory();
        $definition = $factory->define('test');
        $objects = $factory->build('test', 5);
        $this->assertTrue(is_array($objects));
        $this->assertCount(5, $objects);
        $this->assertInstanceOf('Samsui\\Wrapper', $objects[0]);
    }
}
