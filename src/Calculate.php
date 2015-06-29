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
        $end = end($distanceValueWithMileStone);
        $last = $end[3];

        if ($last < $basicStatus['basicDistance']) {
            $total = $basicStatus['basicFee'];
        }

        else {
            $basicDistance = $basicStatus['basicDistance'];
            $totalDistance = end($distanceValueWithMileStone)[3];

            while ($basicDistance < $totalDistance){
                $twoHundred[] = $basicDistance += 200;
            }

            end($twoHundred);
            $lastKey = key($twoHundred);
            unset($twoHundred[$lastKey]);

            $count = count($distanceValueWithMileStone);
            $enrai = 0;
            $tansu = 0;
            foreach ($distanceValueWithMileStone as $key => $value){
                foreach ($twoHundred as $keys => $values) {



                    if ($count === 1) {
                        if ($values > $basicStatus['basicDistance']) {
                            if ($value[2] === 'Enrai') {
                                $enrai += 1;
                            }
                            else {
                                $tansu += 1;
                            }
                        }
                    }

                    elseif ($key > 0) {
                        if ($distanceValueWithMileStone[$key-1][3] < $values && $values < $value[3]) {
                            if ($value[2] === 'Enrai') {
                                $enrai += 1;
                            }
                            else {
                                $tansu += 1;
                            }
                        }
                    }
                }
            }

            foreach ($distanceValueWithMileStone as $key => $value){
                $count = count($distanceValueWithMileStone);

                if ($count === 1) {
                    if ($value[2] === 'Enrai') {
                        $enrai += 1;
                    }
                    else {
                        $tansu += 1;
                    }
                }

                else{
                    if ($key > 0) {
                        if ($distanceValueWithMileStone[$key - 1][3] < $basicStatus['basicDistance'] && $basicStatus['basicDistance'] < $value[3]) {
                            if ($value[2] === 'Enrai') {
                                $enrai += 1;
                            }
                            else {
                                $tansu += 1;
                            }
                        };
                    }
                }
            }

            $one = $basicStatus['basicFee'];
            $two = $enrai * 60;
            $three = $tansu * 50;
            $total = $one + $two + $three;
        }

        return $total;
    }
}