#!/usr/bin/env php
<?php

// Ищем автозагрузчик Composer
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    // локальная установка
    require __DIR__ . '/../vendor/autoload.php';
} elseif (file_exists($autoload = getenv('COMPOSER_HOME') . '/vendor/autoload.php')) {
    // глобальная установка
    require $autoload;
} else {
    // fallback, если автозагрузчик не найден
    fwrite(STDERR, "Autoload file not found. Run 'composer install' first.\n");
    exit(1);
}

// подключаем функцию из неймспейса
use function Artyo\Minesweeper\Controller\startGame;

// запускаем игру
startGame();
