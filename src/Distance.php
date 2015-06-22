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
} 