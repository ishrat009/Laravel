<?php
ini_set("date.timezone", "UTC");

class DateFormatter {
    protected $stamp;

    public function __construct(DateTime $stamp)
    {
        $this->stamp = $stamp;
    }

    public function getStamp()
    {
        return $this->stamp;
    }

}
// lesson/tests/PracticeTest.php
// Understanding assertTrue
 class PracticeTest extends PHPUnit_Framework_TestCase
 {
    public function testHelloWorld()
    {
        $greeting = 'Hello, World.';
        $this->assertTrue($greeting === 'Hello, World.');

        $this->assertFalse($greeting === 'Hello', 'Hello, World.');

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
        //$this->assertContains(NEEDLE, HAYSTACK, OPTIONAL MESSAGE);
        $this->assertNotContains('Troll',$class);
    }

     public function testFamilyRequiresParent()
    {
        $family = [
                    'parents' => ['Joe', 'Abraham'] ,
                    'children' => ['Timmy', 'Suzy']
                  ];

         $this->assertArrayHasKey('parents', $family); // true
        $this->assertInternalType('array', $family['parents']); //true as 'parents' itself is an array
    }

     public function testStampMustBeInstanceOfDateTime()
     {
         $dateTimeStamp = new DateTime;

         $date = new DateFormatter( $dateTimeStamp );

         $this->assertInstanceOf('DateTime', $date->getStamp(),"Not instance of Datetime"); // true
     }

 }