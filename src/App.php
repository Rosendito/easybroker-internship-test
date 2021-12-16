<?php

namespace App;

use App\Actions\PrintPropertiesTitlesAction;

class App
{
    /**
     * Boot the application.
     *
     * @return boolean
     */
    public function boot(): bool
    {
        (new PrintPropertiesTitlesAction())->handle();

        return true;
    }
}
