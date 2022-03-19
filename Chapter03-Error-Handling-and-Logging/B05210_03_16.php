<?php

declare(strict_types=1);

namespace ErrorHandlingAndLogging;

# Error Handling and Logging | ArithmeticError (see page 69)

try {
    intdiv(PHP_INT_MIN, -1);
} catch (\ArithmeticError $e) {
    echo 'Caught: ' . $e->getMessage();
}
