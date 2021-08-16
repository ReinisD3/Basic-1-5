<?php

$pistol = new stdClass();
$pistol->name = 'Eagle';
$pistol->license = 'P';
$pistol->price = 50;

$machine = new stdClass();
$machine->name = 'Ak47';
$machine->license = 'M';
$machine->price = 150;

$bazooka = new stdClass();
$bazooka->name = 'Bazooka';
$bazooka->license = 'H';
$bazooka->price = 350;

$grenade = new stdClass();
$grenade->name = 'Grenade';
$grenade->license = 'H';
$grenade->price = 150;

$guns = [$pistol,$machine,$bazooka,$grenade];

$person = new stdClass();
$person->name='John';
$person->licenses=['A','H'];
$person->cash=500;

echo "Choose from selection 0-{count($guns)}".PHP_EOL;
foreach ($guns as $key => $gun)
{
    echo "{$key} {$gun->name} ({$gun->price}$) license needed : {$gun->license}".PHP_EOL;
}
$selected = (int) readline('Choose from list: ');
if (!isset($guns[$selected]))
{
    echo 'No such item un shop'.PHP_EOL;
    exit;
}
$selectedGun = $guns[$selected];

if (in_array($selectedGun->license,$person->licenses) && $selectedGun->price <= $person->cash)
{
    echo $person->name.' you have license and money for '.$selectedGun->name.PHP_EOL;
}else{
    echo 'You can not purchase this Gun'.PHP_EOL;
}







