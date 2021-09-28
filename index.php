<?php

$age = 11;
$height = 5;

if ($height >= 5 && $age > 10) {
    echo 'You can ride the roll coaster, enjoy!';
} elseif ($height >= 5) {
    echo 'Sorry you are not old enough to ride the roller coaster.';
} else {
    echo 'Sorry you are not tall enough to ride the roller coaster.';
}

?>