<?php

namespace Modubot\Modubot\Bot;


class BotConfig {

    public $nick;
    public $user;
    public $ident;
    public $realname;

    public function __construct($configPath) {

        $rawConfig = file_get_contents($configPath);
        $config = json_decode($rawConfig);

    }

}
