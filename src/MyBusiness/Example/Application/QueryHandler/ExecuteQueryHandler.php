<?php

declare(strict_types=1);

namespace App\MyBusiness\Example\Application\QueryHandler;

use App\MyBusiness\Example\Application\Query\ExecuteQuery;

class ExecuteQueryHandler
{
    public function __invoke(ExecuteQuery $query): bool
    {
        return true;
    }
}
