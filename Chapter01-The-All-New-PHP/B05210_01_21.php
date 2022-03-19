<?php

declare(strict_types=1);

namespace TheAllNewPHP;

# Iterable pseudo-type (see pages 29 and 30)

function export(): iterable
{
    return [
        'Jonhy',
        'Tom',
        'Matt'
    ];
}

function mix(): iterable
{
    return [
        'name' => 'Fabiano',
        'email' => 'fabiano.msrc@gmail.com'
    ];
}

function numbers(): iterable
{
    for ($i = 0; $i <= 5; $i++) {
        yield $i;
    }
}

var_dump(
    export(),
    mix(),
    numbers()
);
