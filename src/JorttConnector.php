<?php

namespace JorttConnector;

use GuzzleHttp\Psr7\Response;
use JorttConnector\Model\Customer;

class JorttConnector
{
    /**
     *
     * @param Response $response
     * @return array
     * @throws \Exception
     */
    public function getAllCustomers(Response $response): array
    {
        if ($response->getStatusCode() === 200) {
            $json = $response->getBody();
            var_dump($json);

            return [];
        } else {
            throw new \Exception("Cannot retrieve the customers");
        }
    }


    public function getCustomer(): Customer
    {
        return new Customer();
    }

    public function createCustomer(Customer $customer): string
    {
        return '';
    }

    public function updateCustomer(Customer $customer): string
    {
        return '';
    }
}
