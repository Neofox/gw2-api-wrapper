<?php

use GuildWars2\Endpoints;
use GuildWars2\Wrapper;

require 'vendor/autoload.php';

$wrapper = (new Wrapper())->setDebug(true);
$wrapper->setEndpoint(Endpoints::QUAGGANS);

$result = $wrapper->callApi(getenv('PARAMETER'));

r($result);
