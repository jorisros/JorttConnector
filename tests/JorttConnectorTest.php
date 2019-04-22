<?php

namespace Tests;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use JorttConnector\JorttConnector;
use PHPUnit\Framework\TestCase;

class JorttConnectorTest extends TestCase
{

    public function testClientConnection()
    {
        $client = new Client();

        $connector = new JorttConnector($response);

        $this->assertIsObject($connector, 'Connector isnt a object');
        $this->assertInstanceOf(JorttConnector::class, $connector, 'Connector isnt the correct class');

    }
}