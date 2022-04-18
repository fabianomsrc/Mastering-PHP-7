<?php

declare(strict_types=1);

namespace Foggyline\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CustomerExportCommand extends Command
{
    protected function configure()
    {
        $this->setName('customer:export')->setDescription('Exports one or more customers.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Some imaginary logic here...
        $output->writeln('Customers exported.');
        return 0;
    }
}
