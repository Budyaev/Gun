<?php
include('Gun.php');
include('Clip.php');
include('Pistol.php');
include('MachineGun.php');



//$colt = new Pistol(2,1);
//
//$colt->shoot();
//$colt->shoot();
//$colt->shoot();

$Uzi = new MachineGun(2,10,4);

$Uzi->multishoot();