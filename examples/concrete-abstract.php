<?php
/**
 * 抽象に具象をセットする
 */

require_once __DIR__ . '/../vendor/autoload.php';

use App\Repository\FooRepository;
use App\Repository\RepositoryInterface;
use DI\Container;

$container = new Container();
$container->set(RepositoryInterface::class, DI\create(FooRepository::class));

$container->get(RepositoryInterface::class);
