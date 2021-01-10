<?php

namespace App\MyBusiness\Messenger\Domain;

interface EventBus
{
    public function dispatch(Event $event): void;
}
