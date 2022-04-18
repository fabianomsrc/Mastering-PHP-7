<?php

declare(strict_types=1);

namespace Foggyline\Console\Command;

use Symfony\Component\Console\{
    Command\Command,
    Input\InputArgument,
    Input\InputInterface,
    Input\InputOption,
    Output\OutputInterface
};

class CustomerRegisterCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('customer:register')
            ->addArgument('name', InputArgument::REQUIRED, 'Customer full name.')
            ->addArgument('email', InputArgument::REQUIRED, 'Customer email address.')
            ->addArgument('dob', InputArgument::OPTIONAL, 'Customer date of birth.')
            ->addOption('email', null, InputOption::VALUE_REQUIRED, 'Send email to customer?')
            ->addOption('log', null, InputOption::VALUE_OPTIONAL, 'Log to event system?')
            ->setDescription('Enables or disables existing customer.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Some imaginary logic here...
        $output->writeln('Customer registered.');
        var_dump(
            $input->getArgument('name'),
            $input->getArgument('email'),
            $input->getArgument('dob'),
            $input->getOption('email'),
            $input->getOption('log'),
        );
        return 0;
    }
}
