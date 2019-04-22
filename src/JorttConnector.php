<?php

namespace JorttConnector;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class JorttConnector
{
    /** @var Client */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getAllCustomers(int $page = 1, int $perPage = 25): array
    {}


    public function getCustomer(): Customer
    {}

    public function createCustomer(Customer $customer): string
    {}

    public function updateCustomer(Customer $customer): string
    {}


}