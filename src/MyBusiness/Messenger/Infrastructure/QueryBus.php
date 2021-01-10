<?php

declare(strict_types=1);

namespace App\MyBusiness\Messenger\Infrastructure;

use App\MyBusiness\Messenger\Domain\Query;
use App\MyBusiness\Messenger\Domain\QueryBus as DomainQueryBus;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;

class QueryBus implements DomainQueryBus
{
    public function __construct(private MessageBusInterface $queryMessageBus) {}

    public function dispatch(Query $query): mixed
    {
        /** @var HandledStamp|null $stamp */
        $stamp = $this->queryMessageBus
            ->dispatch($query)
            ->last(HandledStamp::class);

        if (null === $stamp) {
            return null;
        }

        return $stamp->getResult();
    }
}
