<?php

namespace App\Services;

use GuzzleHttp\Client;

class EasyBrokerService
{
    /**
     * Http client
     *
     * @var Client
     */
    protected Client $http;

    /**
     * Api base url
     *
     * @var string
     */
    protected string $apiBaseUrl = 'https://api.easybroker.com';

    /**
     * Api key
     *
     * @var string
     */
    protected string $apiKey = 'l7u502p8v46ba3ppgvj5y2aad50lb9';

    /**
     * Construct function
     */
    public function __construct()
    {
        $this->setupHttpClient();
    }

    /**
     * Setup http client
     *
     * @return void
     */
    protected function setupHttpClient(): void
    {
        $this->http = new Client([
            'base_uri' => $this->apiBaseUrl,
            'headers' => [
                'X-Authorization' => $this->apiKey,
            ],
        ]);
    }

    /**
     * Get http client
     *
     * @return Client
     */
    public function getHttpClient(): Client
    {
        return $this->http;
    }
}
