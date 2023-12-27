<?php

namespace App\Repository;

class FooRepository implements RepositoryInterface
{
    public function __construct()
    {
        echo 'foo repository constructor' . PHP_EOL;
    }
}
