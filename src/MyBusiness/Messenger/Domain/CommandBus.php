<?php

namespace App\MyBusiness\Messenger\Domain;

interface CommandBus
{
    public function dispatch(Command $command): void;
}
