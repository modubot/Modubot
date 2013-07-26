<?php

namespace Modubot\Modubot\Network;


use React\Dns\Resolver\Factory as DNSFactory;
use React\SocketClient\Connector;
use React\Stream\Stream;

class Network {

    public function connect() {
        $loop = \React\EventLoop\Factory::create();

        $dnsResolverFactory = new DNSFactory();
        $dns = $dnsResolverFactory->createCached('8.8.8.8', $loop);

        $connector = new Connector($loop, $dns);

        $connector->create('irc.esper.net', 6667)->then(function (Stream $stream) {
            echo "hello";
            $stream->write('...');
            $stream->close();
        });
    }


}
