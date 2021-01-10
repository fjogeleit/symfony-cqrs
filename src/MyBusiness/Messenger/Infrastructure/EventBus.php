<?php

declare(strict_types=1);

namespace App\MyBusiness\Messenger\Infrastructure;

use App\MyBusiness\Messenger\Domain\Event;
use App\MyBusiness\Messenger\Domain\EventBus as DomainEventBus;
use Symfony\Component\Messenger\MessageBusInterface;

class EventBus implements DomainEventBus
{
    public function __construct(private MessageBusInterface $eventMessageBus) {}

    public function dispatch(Event $event): void
    {
        $this->eventMessageBus->dispatch($event);
    }
}
