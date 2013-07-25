<?php

require __DIR__ . '/bootstrap/autoload.php';

use Modubot\Modubot\Bot\Bot;
use Modubot\Modubot\Bot\Manager;

// Load the configuration
$manager = new Manager('bot/config/bots.json');

$manager->start();
