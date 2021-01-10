<?php

declare(strict_types=1);

namespace App\MyBusiness\Example\Application\CommandHandler;

use App\MyBusiness\Example\Application\Command\ExecuteCommand;
use App\MyBusiness\Example\Domain\Event\CommandWasExecuted;
use App\MyBusiness\Messenger\Domain\EventBus;

class ExecuteCommandHandler
{
    public function __construct(private EventBus $eventBus) {}

    public function __invoke(ExecuteCommand $command): void
    {
        $this->eventBus->dispatch(new CommandWasExecuted());
    }
}
