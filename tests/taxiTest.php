<?php

namespace TripleI\taxi;

class taxiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var taxi
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new taxi;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\TripleI\taxi\taxi', $actual);
    }

    public function testException()
    {
        $this->setExpectedException('\TripleI\taxi\Exception\LogicException');
        throw new Exception\LogicException;
    }

    public function testFirstCityCheck()
    {
        $data = 'ADFC';
        $taxi = new taxi();
        $firstCity = $taxi->firstCityCheck($data);

        $this->assertEquals(true, $firstCity);

        $data = 'DFC';
        $taxi = new taxi();
        $firstCity = $taxi->firstCityCheck($data);

        $this->assertEquals(false, $firstCity);
    }
}
