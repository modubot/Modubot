<?php

namespace Modubot\Modubot\Bot;

/**
 * Class Manager
 *
 * This is the Bot Manager class, it manages a pool of bots
 *
 * @package Modubot\Modubot\Bot
 */
class Manager {

    public $bots;

    /**
     * Max amount of bots in the pool
     * @var int
     */
    private $maxPoolSize = 10;

    public function __construct($configPath) {
        $rawConfig = file_get_contents($configPath);
        $config = json_decode($rawConfig);

        foreach($config->bots as $bot) {
            $this->bots[$bot->nick] = new Bot($bot);
        }

    }

    /**
     * Start the manager and spawn the bots
     */
    public function start() {
        foreach($this->bots as $bot) {
            $bot->start();
        }
    }

}
