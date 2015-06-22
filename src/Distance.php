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

    public function getDistanceValue($section)
    {
        $distancesArray = array(
            'AB' => 1090,
            'AC' => 180,
            'AD' => 540,
            'BC' => 960,
            'BG' => 1270,
            'CD' => 400,
            'CF' => 200,
            'FD' => 510,
            'DE' => 720,
            'FG' => 230,
            'EG' => 1050);

        $check = false;
        foreach ($distancesArray as $key => $distance) {
            if ($key === $section) {
                $distancesValue = $distance;
                $check = 1;
            }
        }

        if ($check === false) {
            $one = substr($section, 0, 1);
            $two = substr($section, 1, 1);

            $reverse = $two.$one;
            foreach ($distancesArray as $key => $distance) {
                if ($key === $reverse) {
                    $distancesValue = $distance;
                }
            }
        }

        var_dump($distancesValue);
    }
} 