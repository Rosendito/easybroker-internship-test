<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Services\EasyBrokerService;
use App\Actions\PrintPropertiesTitlesAction;

class PrintPropertiesTitlesActionTest extends TestCase
{
    /**
     * Print properties titles action
     *
     * @var PrintPropertiesTitlesAction
     */
    protected PrintPropertiesTitlesAction $action;

    /**
     * Properties stub
     *
     * @var array
     */
    protected array $properties;

    /**
     * Set up test case
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->setPropertiesStub();
        $this->setActionWithEasyBrokerServiceMock();
    }

    /**
     * Set properties from stub
     *
     * @return void
     */
    private function setPropertiesStub(): void
    {
        $file = file_get_contents(__DIR__ . '/stubs/properties.json');

        $this->properties =  (array) json_decode($file);
    }

    /**
     * Set action with easybroker service mock
     *
     * @return void
     */
    protected function setActionWithEasyBrokerServiceMock(): void
    {
        $service = $this->getMockBuilder(EasyBrokerService::class)
            ->getMock();

        $service->expects($this->once())
            ->method('getProperties')
            ->willReturn($this->properties);

        $this->action = new PrintPropertiesTitlesAction($service);
    }

    /** @test */
    public function test_get_properties(): void
    {
        $this->assertEquals(
            $this->properties['content'],
            $this->action->getProperties()
        );
    }

    /** @test */
    public function test_get_properties_must_be_return_20_properties(): void
    {
        $this->assertCount(
            20,
            $this->action->getProperties()
        );
    }

    /** @test */
    public function test_get_properties_titles(): void
    {
        $this->assertEquals(
            array_column($this->properties['content'], 'title'),
            $this->action->getPropertiesTitles()
        );
    }
}
