<?php

$janis = new stdClass();
$janis->name = 'Janis';
$janis->surname = 'Pupa';
$janis->age = 30;
$janis->birtday = '12 January';

$anna = new stdClass();
$anna->name = 'Anna';
$anna->surname = 'Jauka';
$anna->age = 17;
$anna->birtday = '12 May';

$persons =[$janis,$anna];

function checkAge(stdClass $person):string
{
    if ($person->age >17)
    {
        return 'You have reached 18years of age' .PHP_EOL;
    }
    else
    {
        return 'You have not yet reached 18 years of age' .PHP_EOL;
    }
}

foreach ($persons as $person)
{
    echo checkAge($person);
}