<?php

require_once './vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use App\Service\ClassB;

$containerBuilder = new ContainerBuilder();
$containerBuilder
    ->register('class.a', 'App\Service\ClassA')
    ->addArgument('this is the class A');

$containerBuilder->register('class.b', 'App\Service\ClassB')
    ->addArgument(new Reference('class.a'));

/** @var ClassB $classBFromContainer */
$classBFromContainer = $containerBuilder->get('class.b');

echo $classBFromContainer->useClassA();