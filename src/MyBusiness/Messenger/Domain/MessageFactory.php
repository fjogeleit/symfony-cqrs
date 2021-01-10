<?php

declare(strict_types=1);

namespace App\MyBusiness\Messenger\Domain;

class MessageFactory
{
    public function createCommand(string $command, array $payload = [], array $metadata = []): Command
    {
        if (false === class_exists($command)) {
            throw new \InvalidArgumentException(sprintf('Command %s not exist', $command));
        }

        return new $command($payload, $metadata);
    }
}
