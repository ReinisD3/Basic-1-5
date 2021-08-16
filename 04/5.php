<?php

$janis = new stdClass();
$janis->name = 'Janis';
$janis->surname = 'Pupa';
$janis->age = 30;
$janis->birtday = '12 January';

$anna = new stdClass();
$anna->name = 'Anna';
$anna->surname = 'Jauka';
$anna->age = 27;
$anna->birtday = '12 May';

$persons =[$janis,$anna];

foreach ($persons as $person)
{
    echo "{$person->name} {$person->surname} {$person->age} ".PHP_EOL;
}

