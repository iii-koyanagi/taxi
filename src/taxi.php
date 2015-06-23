<?php
/**
 * This file is part of the TripleI.taxi
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace TripleI\taxi;

class taxi
{
    public function firstCityCheck($data)
    {
        $firstAlphabet = substr($data, 0, 1);
        $enrai = array('A', 'B', 'C');

        if (in_array($firstAlphabet, $enrai)) {
            $firstCity = true;
        }
        else {
            $firstCity = false;
        }

        return $firstCity;
    }
}
