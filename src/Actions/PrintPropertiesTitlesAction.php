<?php

namespace App\Actions;

use App\Services\EasyBrokerService;

class PrintPropertiesTitlesAction
{
    public function __construct(
        protected EasyBrokerService $easyBrokerService
    ){ }

    /**
     * Handle action
     *
     * @return void
     */
    public function handle(): void
    {
        $this->printPropertiesTitles();
    }

    /**
     * Get properties from easy broker service
     *
     * @return array
     */
    public function getProperties(): array
    {
        return $this->easyBrokerService->getProperties()['content'];
    }

    /**
     * Get properties titles
     *
     * @return array
     */
    public function getPropertiesTitles(): array
    {
        return array_column($this->getProperties(), 'title');
    }

    /**
     * Print properties titles
     *
     * @return void
     */
    public function printPropertiesTitles(): void
    {
        $list = '<ul>' . PHP_EOL;

        foreach ($this->getPropertiesTitles() as $title) {
            $list .= '<li>' . $title . PHP_EOL . '</li>';
        }

        $list .= '</ul>';

        echo $list;
    }
}
