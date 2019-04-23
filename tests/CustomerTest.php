<?php
/**
 * Class name
 *
 * @package  JorttConnector
 * @author   jorisros
 * @license  GPL <GNU General Public License, version 3>
 */

namespace Tests;


use JorttConnector\Model\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testClass()
    {
        $customer = new Customer();

        $this->assertInstanceOf(Customer::class, $customer);
        $this->assertIsObject($customer);

    }
}