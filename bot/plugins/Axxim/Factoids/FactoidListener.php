<?php
namespace Axxim\Factoids;

use Modubot\Modubot\Command\CommandListener;
use Modubot\Modubot\Message;

class FactoidListener extends CommandListener {

    public function onMessage(Message $message) {

        var_dump($message);

    }


}
