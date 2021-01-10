<?php

declare(strict_types=1);

namespace App\MyBusiness\Messenger\Domain;

trait Payload
{
    protected array $payload;

    protected array $metadata;

    public function __construct(array $payload = [], array $metadata = [])
    {
        $this->setPayload($payload);
        $this->setMetadata($metadata);
    }

    public function payload(): array
    {
        return $this->payload;
    }

    protected function setPayload(array $payload): void
    {
        $this->payload = $payload;
    }

    public function metadata(): array
    {
        return $this->metadata;
    }

    protected function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }
}
