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
        $totalDistance = end($distanceValueWithMileStone)[3];

        while ($basicDistance < $totalDistance){
            $twoHundreds[] = $basicDistance += 200;
        }

        end($twoHundreds);
        $lastKey = key($twoHundreds);
        unset($twoHundreds[$lastKey]);

        var_dump($twoHundreds);
    }
}