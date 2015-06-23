<?php

namespace TripleI\Distance;

use TripleI\taxi\Calculate;
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
        $distanceValueWithMileStone = $distance->mileStones($distanceValue);

        $cal = new Calculate();
        $basicStatus = $cal->basicStatus($distanceValueWithMileStone);

        var_dump($basicStatus);
    }
}
