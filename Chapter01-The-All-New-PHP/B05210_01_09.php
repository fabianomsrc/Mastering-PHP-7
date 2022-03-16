<?php

declare(strict_types=1);

namespace TheAllNewPHP;

# Anonymous classes (see pages 14 and 15)

class User
{
}

class Salary
{
}

function gen()
{
    return new class() {};
}

$obj1 = new class() {};
$obj2 = new class() {};
$obj3 = new class() extends User {};
$obj4 = new class() extends Salary {};
$obj5 = gen();
$obj6 = gen();

echo get_class($obj1) . "\n";
echo get_class($obj2) . "\n";
echo get_class($obj3) . "\n";
echo get_class($obj4) . "\n";
echo get_class($obj5) . "\n";
echo get_class($obj6) . "\n";

for ($i = 0; $i <= 5 ; $i++) { 
    echo get_class(new class() {}) . "\n";
}
