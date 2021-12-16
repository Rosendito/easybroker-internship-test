<?php

namespace Tests;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use App\Services\EasyBrokerService;

class EasyBrokerServiceTest extends TestCase
{
    /** @test */
    public function test_return_instance_of_guzzle_client_in_get_http_client_method()
    {
        $easyBrokerService = new EasyBrokerService();

        $this->assertInstanceOf(Client::class, $easyBrokerService->getHttpClient());
    }
}
