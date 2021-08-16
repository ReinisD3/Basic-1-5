<?php


$personRand = new stdClass();
$personRand->name = 'Janis';
$personRand->age ='20';

function checkAge(stdClass $person): string
{
    if ($person->age >17)
    {
        return 'You have reached 18 years of age' .PHP_EOL;
    }
    else
    {
        return 'You have not yet reached 18 years of age' .PHP_EOL;
    }
}

echo checkAge($personRand);