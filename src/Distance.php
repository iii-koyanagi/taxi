<?php
/**
 * Created by PhpStorm.
 * User: koyanagi
 * Date: 2015/06/22
 * Time: 18:55
 */

namespace TripleI\taxi;


class Distance {

    public function sectionArray($data)
    {
        $strLength = strlen($data);
        $sectionArray = array();
        for ($i = 0; $i <= $strLength; $i++) {
            $section = substr($data, $i, 2);
            if (strlen($section) === 2) {
                array_push($sectionArray, $section);
            }
        }
        return $sectionArray;
    }

    public function getDistanceValue($sectionArray)
    {
        $distancesArray = $this->getDistancesArray();

        foreach ($sectionArray as $section) {
            foreach ($distancesArray as $key => $distance) {
                if ($key === $section) {
                    $distancesValue[] = $distance;
                }
            }
        }

        return $distancesValue;
    }

    private function getDistancesArray()
    {
        $distancesArray = array(
            'AB' => array('AB', 1090, 'Enrai'),
            'BC' => array('BC', 960, 'Enrai'),
            'AC' => array('AC', 180, 'Enrai'),
            'CF' => array('CF', 200, 'Enrai'),
            'BG' => array('BG', 1270, 'Enrai'),
            'AD' => array('AD', 540, 'Tansu'),
            'CD' => array('CD', 400, 'Tansu'),
            'FD' => array('FD', 510, 'Tansu'),
            'DE' => array('DE', 720, 'Tansu'),
            'FG' => array('FG', 230, 'Tansu'),
            'EG' => array('EG', 1050, 'Tansu'),

            'BA' => array('BA', 1090, 'Enrai'),
            'CB' => array('CB', 960, 'Enrai'),
            'CA' => array('CA', 180, 'Enrai'),
            'FC' => array('FC', 200, 'Enrai'),
            'GB' => array('GB', 1270, 'Enrai'),
            'DA' => array('DA', 540, 'Tansu'),
            'DC' => array('DC', 400, 'Tansu'),
            'DF' => array('DF', 510, 'Tansu'),
            'ED' => array('ED', 720, 'Tansu'),
            'GF' => array('GF', 230, 'Tansu'),
            'GE' => array('GE', 1050, 'Tansu')
        );

        return $distancesArray;
    }

    public function mileStones($distancesValue)
    {
        $mile = 0;
        foreach ($distancesValue as $key => $value) {
            $mile += $value[1];
            array_push($distancesValue[$key], $mile);
        }

        return $distancesValue;
    }
} 