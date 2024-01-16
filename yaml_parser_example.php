<?php

ini_set('display_errors', 1);

require_once './vendor/autoload.php';

use Symfony\Component\Yaml\Parser;

$yamlParse = new Parser();

$phpValue = $yamlParse->parseFile('config/services.yaml');

dump($phpValue);