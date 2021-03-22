<?php

class Area
{
    // function area($length,$breadth)
    // {
    //     return $length*$breadth;
    // }

    function __call($n,$len)
    {
        if($n=='area')
            return $len[0]*$len[0];
    }
}

$s=new Area();
echo $s->area(5);

?>