<?php

ini_set('display_errors', 1);

require_once './vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$containerBuilder = new ContainerBuilder();

$loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__));
$loader->load('config/services.yaml');

$classBFromYamlLoader = $containerBuilder->get('class.b');

echo $classBFromYamlLoader->useClassA();