<?php

$fruits = [
    [
        'name' => 'banana',
        'weight' => '3'
    ],
    [
        'name' => 'watermelon',
        'weight' => '12'
    ],
    [
        'name' => 'strawberry',
        'weight' => '5'
    ],
    [
        'name' => 'melon',
        'weight' => '21'
    ]
    ];
$shippingCost = ['more_than_10kg' => 2 , 'less_than_10kg' => 1];

function checkWeight (array $fruit,array $shippingCost):string
{
    if ($fruit['weight'] > 10) {
        return $shippingCost['more_than_10kg'].' euros.';
    }else {
        return $shippingCost['less_than_10kg'].' euro.';
    }
}

 foreach ($fruits as $fruit)
 {

     echo $fruit['name'].' weighs '.$fruit['weight'].'kg would cost to ship '
         .checkWeight($fruit,$shippingCost).PHP_EOL;
 }

