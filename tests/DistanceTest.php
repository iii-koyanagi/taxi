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
        $data = 'AB';
        $distance = new Distance();
        $sectionArray = $distance->sectionArray($data);
        $distanceValue = $distance->getDistanceValue($sectionArray);
        $distanceValueWithMileStone = $distance->mileStones($distanceValue);

        $cal = new Calculate();
        $basicStatus = $cal->basicStatus($distanceValueWithMileStone);
        $total = $cal->cal($distanceValueWithMileStone, $basicStatus);

        var_dump($total);
    }

//    public function testArray()
//    {
//        $data = array(
//            'ADFC' => 510,
//            'CFDA' => 500,
//            'AB' => 460,
//            'BA' => 460,
//            'CD' => 400,
//            'DC' => 350,
//            'BG' => 520,
//            'GB' => 530,
//            'FDA' => 450,
//            'ADF' => 450,
//            'FDACB' => 750,
//            'BCADF' => 710,
//            'EDACB' => 800,
//            'BCADE' => 810,
//            'EGFCADE' => 920,
//            'EDACFGE' => 910,
//            'ABCDA' => 960,
//            'ADCBA' => 1000,
//            'BADCFGB' => 1180,
//            'BGFCDAB' => 1180,
//            'CDFC' => 460,
//            'CFDC' => 450,
//            'ABGEDA' => 1420,
//            'ADEGBA' => 1470,
//            'CFGB' => 640,
//            'BGFC' => 630,
//            'ABGEDFC' => 1480,
//            'CFDEGBA' => 1520,
//            'CDFGEDABG' => 1770,
//            'GBADEGFDC' => 1680);
//
//        foreach ($data as $key => $value) {
//            $one_data = $key;
//            $distance = new Distance();
//            $sectionArray = $distance->sectionArray($one_data);
//            $distanceValue = $distance->getDistanceValue($sectionArray);
//            $distanceValueWithMileStone = $distance->mileStones($distanceValue);
//
//            $cal = new Calculate();
//            $basicStatus = $cal->basicStatus($distanceValueWithMileStone);
//            $total = $cal->cal($distanceValueWithMileStone, $basicStatus);
//
//
//            $this->assertEquals($total, $value);
//        }
//    }
}
