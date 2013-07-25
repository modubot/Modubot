<?php
namespace Modubot\Modubot\Command;

use Modubot\Modubot\Command as Command;
use Modubot\Modubot\Message as Message;

abstract class CommandListener {

    public function onCommand(Command $command) {

    }

    public function onMessage(Message $message) {

    }

}
