<?php

namespace Test\Psalm;

class Class1
{
    /**
     * @return Class2|int[]
     */
    public static function get(): Class2 | array
    {
        return [1,2,3];
    }
}
