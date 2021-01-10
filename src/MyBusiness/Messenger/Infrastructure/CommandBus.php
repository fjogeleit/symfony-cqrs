<?php

declare(strict_types=1);

namespace App\MyBusiness\Messenger\Infrastructure;

use App\MyBusiness\Messenger\Domain\Command;
use App\MyBusiness\Messenger\Domain\CommandBus as DomainCommandBus;
use Symfony\Component\Messenger\MessageBusInterface;

class CommandBus implements DomainCommandBus
{
    public function __construct(private MessageBusInterface $commandMessageBus) {}

    public function dispatch(Command $command): void
    {
        $this->commandMessageBus->dispatch($command);
    }
}
