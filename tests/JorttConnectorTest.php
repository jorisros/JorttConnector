<?php

namespace Tests;


use GuzzleHttp\Psr7;
use JorttConnector\JorttConnector;
use JorttConnector\Model\Customer;
use PHPUnit\Framework\TestCase;

class JorttConnectorTest extends TestCase
{

    public function testClientConnection()
    {
        $connector = new JorttConnector();
        $this->assertIsObject($connector, 'Connector isnt a object');
        $this->assertInstanceOf(JorttConnector::class, $connector, 'Connector isnt the correct class');
    }

    public function testAllCustomersCall()
    {
        $content = Psr7\stream_for(file_get_contents(__DIR__ . '/../Resource/json/call_get_customer.json'));
        $response = new Psr7\Response(200, ['Content-Type' => 'application/json'], $content);

        $connector = new JorttConnector();

        $customers = $connector->getAllCustomers($response);

        $this->assertIsArray($customers);

        $lastCustomer = end($customers);
        $this->assertInstanceOf(Customer::class, $lastCustomer);
        $this->equalTo(count($customers), 2);
    }

    public function testFailedRequest()
    {
        $content = Psr7\stream_for(file_get_contents(__DIR__ . '/../Resource/json/call_get_customer.json'));
        $response = new Psr7\Response(500, ['Content-Type' => 'application/json'], $content);

        $this->expectException('Cannot retrieve the customers');
    }
}