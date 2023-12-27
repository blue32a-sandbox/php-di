<?php

namespace App;

class Bar
{
    public function __construct()
    {
        echo 'bar constructor' . PHP_EOL;
    }

    public function bar(): void
    {
        echo 'bar' . PHP_EOL;
    }
}
