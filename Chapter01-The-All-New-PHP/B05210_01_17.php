<?php

declare(strict_types=1);

namespace TheAllNewPHP;

# Constant arrays (see pages 21 and 22)

// The class constant - using 'const' keyword
class Rift
{

    const APP = [
        'name' => 'Rift',
        'edition' => 'Community',
        'version' => '2.1.2',
        'license' => 'OLS'
    ];
}

// The class constant - using 'const' keyword
interface RiftInterface
{
    const APP = [
        'name' => 'Rift',
        'edition' => 'Community',
        'version' => '2.1.2',
        'licence' => 'OSL'
    ];
}

// The constant - using 'define' construct
define('APP', [
    'name' => 'Rift',
    'edition' => 'Community',
    'version' => '2.1.2',
    'licence' => 'OSL'
]);

echo Rift::APP['version'] . PHP_EOL;
echo RiftInterface::APP['version'] . PHP_EOL;
echo APP['version'] . PHP_EOL;
