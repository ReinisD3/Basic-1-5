<?php

$arr =[4,5.11,7,'Aloha',95];


function double(int $val): int
{
   return $val*2;
}


foreach ($arr as $elem)
{
    if (is_int($elem))
    {
        echo double($elem) . PHP_EOL;
    }
}


