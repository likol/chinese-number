<?php
namespace banqhsia\ChineseNumber\Types;

use banqhsia\ChineseNumber\Helpers\Helper;

class Integers extends Numbers
{

    /**
     * Construct
     *
     * @param integer $number
     */
    public function __construct($number = 0)
    {
        $this->input = $number;


    }



}
