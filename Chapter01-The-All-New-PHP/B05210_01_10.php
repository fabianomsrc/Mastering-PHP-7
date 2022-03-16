<?php

declare(strict_types=1);

namespace TheAllNewPHP;

# Generator delegation (see pages 15 and 16)

function even()
{
    for ($i = 1; $i <= 10 ; $i++) { 
        if ($i % 2 == 0) {
            yield $i;
        }
    }
}

function odd()
{
    for ($i = 1; $i <= 10 ; $i++) { 
        if ($i % 2 != 0) {
            yield $i;
        }
    }
}

function mix()
{
    yield -1;
    yield from odd();
    yield 17;
    yield from even();
    yield 33;
}

foreach (mix() as $mix) {
    echo $mix . ' ';
}
