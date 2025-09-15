#!/usr/bin/env php
<?php

$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    $autoload = dirname(__DIR__, 2) . '/autoload.php'; 
}
require $autoload;

use function Artyo\Minesweeper\Controller\startGame;

startGame();