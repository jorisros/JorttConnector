<?php
/**
 * Class name
 *
 * @package  JorttConnector
 * @author   jorisros
 * @license  GPL <GNU General Public License, version 3>
 */

namespace JorttConnector\Factory;


use GuzzleHttp\Client;
use http\Env\Request;

class RequestBuilder
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var Client
     */
    private $client;

    /**
     * RequestBuilder constructor.
     * @param string $url
     * @param string $username
     * @param string $apiKey
     */
    public function __construct(string $url, string $username, string $apiKey)
    {
        $this->url = $url;
        $this->username = $username;
        $this->apiKey = $apiKey;

        $this->client = new Client([
            'base_uri' => $this->url,
        ]);
    }

    /**
     * Returns the request for retrieving the customers from API
     *
     * @param int $page
     * @param int $perPage
     * @return Request
     */
    public function requestAllCustomers(int $page = 1, int $perPage = 25): Request
    {
        return $this->client->request(
            'GET',
            '/get-customers',
            [
                'page' => $page,
                'perPage' => $perPage
            ]
        );
    }
}
