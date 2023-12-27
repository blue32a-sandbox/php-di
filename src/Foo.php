<?php

namespace App;

class Foo
{
    public function __construct(private readonly Bar $bar)
    {
        echo 'foo constructor' . PHP_EOL;
    }

    public function foo(): void
    {
        echo 'foo' . PHP_EOL;
        $this->bar->bar();
    }
}
