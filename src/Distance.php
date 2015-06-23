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
            'AB' => array(1090, true),
            'BC' => array(960, true),
            'AC' => array(180, true),
            'CF' => array(200, true),
            'BG' => array(1270, true),
            'AD' => array(540, false),
            'CD' => array(400, false),
            'FD' => array(510, false),
            'DE' => array(720, false),
            'FG' => array(230, false),
            'EG' => array(1050, false));

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