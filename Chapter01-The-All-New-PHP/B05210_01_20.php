<?php

declare(strict_types=1);

namespace TheAllNewPHP;

# Throwables (see page 24)

set_error_handler( function(string $errno, string $errstr) {
    throw new \Exception($errno, $errstr);
});

class Mailer
{
    private $transport;

    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
    }
}

class Transport
{
}

$transport = new \stdClass();

try {
    $mailer = new Mailer($transport);
} catch (\Throwable $th) {
    echo 'Caught!';
} finally {
    echo 'Cleanup!';
}
