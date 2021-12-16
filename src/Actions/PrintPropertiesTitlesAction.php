<?php

namespace App\Actions;

use App\Services\EasyBrokerService;

class PrintPropertiesTitlesAction
{
    /**
     * EasyBroker service
     *
     * @var EasyBrokerService
     */
    protected EasyBrokerService $easyBrokerService;

    public function __construct()
    {
        $this->easyBrokerService = new EasyBrokerService();
    }

    /**
     * Handle action
     *
     * @return void
     */
    public function handle(): void
    {
        echo "Hola mundo!";
    }
}
