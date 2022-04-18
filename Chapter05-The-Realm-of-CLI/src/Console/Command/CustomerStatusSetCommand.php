<?php

declare(strict_types=1);

namespace Foggyline\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CustomerStatusSetCommand extends Command
{
    protected function configure()
    {
        $this->setName('customer:status:set')->setDescription('Enables of disables existing customer.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Some imaginare logic here...
        $output->writeln('Customer disabled.');
        return 0;
    }
}
