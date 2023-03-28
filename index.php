<?php

require_once 'src/Fighter.php';

// First Labour : Heracles vs Nemean Lion
// use your Figher class here

$heracles = new Fighter('🧔 Héraclès', 20, 6);
$lion = new Fighter('🦁 Lion de Némée', 11, 13);

$round = 1;
while ($heracles->isAlive() && $lion->isAlive()) {
    echo '🕛 Round : ' . $round . PHP_EOL;
    $heracles->fight($lion);
    echo $heracles->getName() . '🗡️' . $lion->getName() . '. 💙 ' . $lion->getLife() . PHP_EOL;
    if ($lion->isAlive()) {
        $lion->fight($heracles);
        echo $lion->getName() . '🗡️' . $heracles->getName() . '. 💙 ' . $heracles->getLife() . PHP_EOL;
    }
    $round++;
}

if (!$heracles->isAlive()) {
    $loser = $heracles->getName();
    $winner = $lion->getName();
} else {
    $loser = $lion->getName();
    $winner = $heracles->getName();
}

echo '🏆 ' . $winner . PHP_EOL;
echo '💀 ' . $loser . PHP_EOL;
