<?php

declare(strict_types=1);

namespace App\Command;

use App\MyBusiness\Example\Application\Command\ExecuteCommand;
use App\MyBusiness\Messenger\Domain\CommandBus;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommandBus extends Command
{
    protected static $defaultName = 'app:execute-command';

    private CommandBus $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        parent::__construct();
        $this->commandBus = $commandBus;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->commandBus->dispatch(new ExecuteCommand());

        return 0;
    }
}
