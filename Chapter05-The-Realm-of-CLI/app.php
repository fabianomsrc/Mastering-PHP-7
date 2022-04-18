#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Foggyline\Console\Command\CustomerExportCommand;
use Foggyline\Console\Command\CustomerRegisterCommand;
use Foggyline\Console\Command\CustomerStatusSetCommand;
use Symfony\Component\Console\Application;

$app = new Application('Foggyline App', '1.0.0');

$app->add(new CustomerRegisterCommand());
$app->add(new CustomerStatusSetCommand());
$app->add(new CustomerExportCommand());

$app->run();
