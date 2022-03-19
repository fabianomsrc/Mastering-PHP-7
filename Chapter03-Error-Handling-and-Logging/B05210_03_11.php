<?php

declare(strict_types=1);

namespace ErrorHandlingAndLogging;

# Error Handling and Logging (see page 67)

ini_set('memory_limit', '1M');

try {
    $content = '';
    while (true) {
        $content .= 'content';
    }
} catch (\Error $e) {
    echo 'Caught ' . $e->getMessage();
}
