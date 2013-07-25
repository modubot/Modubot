<?php

require __DIR__ . '/bootstrap/autoload.php';

use Modubot\Modubot\Bot;
use Modubot\Modubot\BotConfig;

// Load the configuration
$config = new BotConfig('bot/config/bots.json');

// Start the bot
$bot = require_once __DIR__ . '/bootstrap/start.php';

$bot = new Bot($config);

$bot->start();
