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
            $check = false;
            foreach ($distancesArray as $key => $distance) {
                if ($key === $section) {
                    $distancesValue[] = $distance;
                    $check = true;
                }
            }

            if ($check === false) {
                $one = substr($section, 0, 1);
                $two = substr($section, 1, 1);

                $reverse = $two.$one;
                foreach ($distancesArray as $key => $distance) {
                    if ($key === $reverse) {
                        $distancesValue[] = $distance;
                    }
                }
            }
        }

        return $distancesValue;
    }

    private function getDistancesArray()
    {
        $distancesArray = array(
            'AB' => array(1090, 'Enrai'),
            'BC' => array(960, 'Enrai'),
            'AC' => array(180, 'Enrai'),
            'CF' => array(200, 'Enrai'),
            'BG' => array(1270, 'Enrai'),
            'AD' => array(540, 'Tansu'),
            'CD' => array(400, 'Tansu'),
            'FD' => array(510, 'Tansu'),
            'DE' => array(720, 'Tansu'),
            'FG' => array(230, 'Tansu'),
            'EG' => array(1050, 'Tansu'));

        return $distancesArray;
    }

    public function mileStonesArray($distancesValue)
    {
        $mile = 0;
        $mileStonesArray = array();
        foreach ($distancesValue as $key => $value) {
            $mile += $value[0];
            array_push($mileStonesArray, $mile);
        }

        return $mileStonesArray;
    }
} 