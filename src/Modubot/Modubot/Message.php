<?php
namespace Modubot\Modubot;

use Phergie\Irc\Parser;

/**
 * Class Message
 * Handles messages on a message by message basis
 *
 * @package Modubot\Modubot
 */
class Message {

    public $prefix;
    public $nick;
    public $command;
    public $params;
    public $targets;
    public $message;

    public function __construct($input) {

        $parser = new Parser();
        $message = $parser->parse($input);

        $this->prefix = $message['prefix'];
        $this->nick = $message['nick'];
        $this->command = $message['command'];
        $this->params = $message['params'];
        $this->targets = $message['targets'];
        $this->message = $message['message'];

    }

}
