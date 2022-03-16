<?php

declare(strict_types=1);

namespace TheAllNewPHP;

# Generator return expressions (see page 17)

$letters = (function() {
    yield 'A';
    yield 'B';
    return 'C';
})();

foreach ($letters as $letter) {
    echo $letter . ' ';
}

echo $letters->getReturn();
