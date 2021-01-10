<?php

namespace App\MyBusiness\Messenger\Domain;

interface QueryBus
{
    public function dispatch(Query $query): mixed;
}
