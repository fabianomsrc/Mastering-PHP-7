<?php

declare(strict_types=1);

namespace ErrorHandlingAndLogging;

# Error Handling and Logging | DivisionByZeroError (see page 69)

try {
    $x = 5 / 0;
} catch (\DivisionByZeroError $e) {
    echo 'Caught: ' . $e->getMessage();
}
