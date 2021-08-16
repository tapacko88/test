<?php

use App\Api\ApiConfig;

require_once __DIR__ . '/../vendor/autoload.php';


$config = new ApiConfig(__DIR__ . '/../data/api_config.json');
echo $config->baseUri() . "\n";