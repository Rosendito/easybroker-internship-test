<?php

namespace App;

use App\Actions\PrintPropertiesTitlesAction;
use App\Services\EasyBrokerService;

class App
{
    /**
     * Boot the application.
     *
     * @return boolean
     */
    public function boot(): void
    {
        $this->runPrintPropertiesTitlesAction();
    }

    /**
     * Run print properties titles action
     *
     * @return void
     */
    protected function runPrintPropertiesTitlesAction(): void
    {
        (new PrintPropertiesTitlesAction(
            new EasyBrokerService()
        ))->handle();
    }
}
