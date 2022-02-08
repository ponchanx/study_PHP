<?php

declare(strict_types=1);

function showinfo(string $name, int $score): void
{
    echo $name . ': ' . $score . PHP_EOL;
}

// showinfo('saito', 40);
// showinfo('saito', 'dotinstall');
showinfo('saito', '4');