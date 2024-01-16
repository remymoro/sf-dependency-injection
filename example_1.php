<?php


require_once './vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use App\Service\ClassA;

$containerBuilder = new ContainerBuilder();
$containerBuilder
    ->register('class.a', 'App\\ClassA')
    ->addArgument('this is the class A');

dd($containerBuilder);

$classAFromContainer = $containerBuilder->get('class.a');

echo $classAFromContainer->getValue();