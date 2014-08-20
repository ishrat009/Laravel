<?php

// lesson/tests/PracticeTest.php
// Understanding assertTrue
 class PracticeTest extends PHPUnit_Framework_TestCase
 {
    public function testHelloWorld()
    {
        $greeting = 'Hello, World.';
        $this->assertTrue($greeting === 'Hello, World.');

        //$greeting = 'Hello, World.';
        $this->assertFalse($greeting === 'Hello', 'Hello, World.');

        //$greeting = 'Hello, World.';
        $this->assertEquals('Hello, World.', $greeting);
        // assertEquals accepts three arguments:
        //$this->assertEquals(EXPECTED, ACTUAL, OPTIONAL MESSAGE);

        $val = 0;
        $this->assertSame(0, $val); // true
        }

    public function testClassIncludesMe()
    {
        $class = ['1st', '2nd', 'Me'];
        $this->assertContains('Me',$class);
    }

 }