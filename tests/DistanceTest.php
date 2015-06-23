<?php

namespace TripleI\Distance;

use TripleI\taxi\Distance;

class DistanceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var distance
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new Distance();
    }

    public function testDistance()
    {
        $data = 'ADFC';
        $distance = new Distance();
        $sectionArray = $distance->sectionArray($data);
        $distanceValue = $distance->getDistanceValue($sectionArray);

        $mileStonesArray = $distance->mileStonesArray($distanceValue);
        var_dump($mileStonesArray);
    }
}
