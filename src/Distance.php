<?php
/**
 * Created by PhpStorm.
 * User: koyanagi
 * Date: 2015/06/22
 * Time: 18:55
 */

namespace TripleI\taxi;


class Distance {

    public function edit($data)
    {
        $count = strlen($data);
        $arr = array();
        for ($i = 0; $i <= $count; $i++) {
            $rest = substr($data, $i, 2);
            if (strlen($rest) === 2) {
                array_push($arr, $rest);
            }
        }

        return $arr;
    }

    public function getDistance($data)
    {
        $dis_arr = array(
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
        foreach ($dis_arr as $key => $value) {
            if ($key === $data) {
                $distance = $value;
                $check = 1;
            }
        }

        if ($check === false) {
            $one = substr($data, 0, 1);
            $two = substr($data, 1, 1);

            $reverse = $two.$one;
            foreach ($dis_arr as $key => $value) {
                if ($key === $reverse) {
                    $distance = $value;
                }
            }
        }

        var_dump($distance);
    }
} 