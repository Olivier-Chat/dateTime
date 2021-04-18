<?php
$presentTime = new DateTime();
$destinationTime = new DateTime('2021-03-01 9:00');
var_dump($destinationTime);
echo $presentTime->format('M d Y A h i ' ).PHP_EOL;
echo $destinationTime->format('M d Y A h i ' ).PHP_EOL;
$diff = $presentTime->diff($destinationTime);
$diffFormated = $diff->format('%y ans, %m mois,  %d jours, %h heures, %i minutes');
echo $diffFormated.PHP_EOL;

function getMinutesFrom(DateInterval $diff):string
{
    return $diff->days*24*60 + $diff->h*60 + $diff->i;
}

$diffMinute = getMinutesFrom($diff);

echo "La différence en minute est de  ".$diffMinute.PHP_EOL;

echo "il faudra: " . $diffMinute/10000 . "Litres de carburant";


