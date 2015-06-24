<?php
/**
 * Created by PhpStorm.
 * User: koyanagi
 * Date: 2015/06/22
 * Time: 18:55
 */

namespace TripleI\taxi;


class Calculate {

    public function basicStatus($distanceValueWithMileStone)
    {
        foreach ($distanceValueWithMileStone as $key => $value) {
            if ($key === 0) {
                $firstAlphabet = substr($value[0], 0, 1);
                $enrai = array('A', 'B', 'C');

                if (in_array($firstAlphabet, $enrai)) {
                    $basicDistance = 995;
                    $basicFee = 400;
                    $addingFee = 60;
                }
                else {
                    $basicDistance = 845;
                    $basicFee = 350;
                    $addingFee = 50;
                }
            }
        }

        $basicStatus = array(
            'basicDistance' => $basicDistance,
            'basicFee' => $basicFee,
            'addingFee' => $addingFee);

        return $basicStatus;
    }

    public function cal($distanceValueWithMileStone, $basicStatus)
    {
        $basicDistance = $basicStatus['basicDistance'];
//        $last = end($distanceValueWithMileStone);
//        $totalDistance = $last[2];

        $check = false;
        foreach ($distanceValueWithMileStone as $key => $value) {
            if ($basicDistance < $value[2] && $check === false) {
                $lastDistance = $distanceValueWithMileStone[$key-1][2];
                $kurikoshiDistance = $basicDistance - $lastDistance;
                
                $check = true;
            } ;
        }
    }
}