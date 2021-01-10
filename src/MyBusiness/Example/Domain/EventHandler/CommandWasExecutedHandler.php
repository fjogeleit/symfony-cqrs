<?php

declare(strict_types=1);

namespace App\MyBusiness\Example\Domain\EventHandler;

use App\MyBusiness\Example\Domain\Event\CommandWasExecuted;

class CommandWasExecutedHandler
{
    public function __invoke(CommandWasExecuted $event): void
    {
        printf("%s happened\n", $event::class);
    }
}
