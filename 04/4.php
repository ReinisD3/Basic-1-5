<?php

$arr =[1,3,5,7,9,12,14,16,18];

foreach ($arr as $val)
{
    if ($val % 3 === 0 )
    {
        echo $val .PHP_EOL;
    }
}