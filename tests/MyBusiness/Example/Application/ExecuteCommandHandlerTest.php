<?php

declare(strict_types=1);

namespace App\Tests\MyBusiness\Example\Application;

use App\MyBusiness\Example\Application\Command\ExecuteCommand;
use App\MyBusiness\Messenger\Domain\CommandBus;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ExecuteCommandHandlerTest extends WebTestCase
{
    protected function setUp(): void
    {
        self::bootKernel();
    }

    public function testExecuteCommand()
    {
        $this->expectNotToPerformAssertions();

        self::$container->get(CommandBus::class)->dispatch(new ExecuteCommand());
    }
}
