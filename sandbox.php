<?php
require ('vendor/autoload.php');

$zKill = new \ZKill\ZKill();

foreach ($zKill->get() as $kill){
	echo $kill->victim->characterName."\n";
}
