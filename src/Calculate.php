<?php
/**
 * Created by PhpStorm.
 * User: koyanagi
 * Date: 2015/06/22
 * Time: 18:55
 */

namespace TripleI\taxi;


class Calculate {

    public function calculate($distanceValue)
    {
        $totalPrice = 0;
        foreach ($distanceValue as $key => $value) {
            if ($key === 0) {
                if ($value[1] === true) {
                    $totalPrice += 400;
                    $startingFare = 995;
                    $addingPrice = 60;
                }
                else {
                    $totalPrice += 350;
                    $startingFare = 845;
                    $addingPrice = 50;
                }
            }
        }

    }
}