<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use Http\Factory\Guzzle\RequestFactory;
use Cmfcmf\OpenWeatherMap;
use Noodlehaus\Config;

$httpClient = new Client();
$httpRequestFactory = new RequestFactory();

$conf = new Config('../config/config.json');

$owm = new OpenWeatherMap($conf->get('key.value'), $httpClient, $httpRequestFactory);

$weather = $owm->getWeather($conf->get('city.name'), $conf->get('city.mode'), $conf->get('city.codelangue'));

$temperature = $weather->temperature->now;
$temperature->getValue();

echo PHP_EOL;
echo "ID : ";
echo $weather->city->id;
echo PHP_EOL;
echo "Nom : ";
echo $weather->city->name;
echo PHP_EOL;
echo "Température : ";
echo $temperature;
echo PHP_EOL;
