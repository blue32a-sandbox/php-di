<?php
/**
 * Autowiring
 */

require_once __DIR__ . '/../vendor/autoload.php';

use App\Foo;
use DI\Container;

$container = new Container();
$container->get(Foo::class)->foo();
$container->get(Foo::class)->foo();
