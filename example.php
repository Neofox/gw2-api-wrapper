<?php


use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

require 'vendor/autoload.php';

const API_KEY  = '7DB220DC-55BF-4C40-A085-065266F89ADACBAF22CF-2FF9-4476-A022-83C4953FCFFF';

$wrapper = (new Wrapper())->setDebug(false)->setLog(false);
$wrapper->setEndpoint(Endpoints::QUAGGANS);

$result = $wrapper->callApi(getenv('PARAMETER'));


$wrappedCall = new \GuildWars2\WrappedClass\MapWrapper(false, true);
$wrappedResult = $wrappedCall->getWorldInfo(['ids' => '2104,2102,2001'], 'fr');

$test = new \GuildWars2\WrappedClass\MiscWrapper(false, true);
r($test->getTokenInfo(API_KEY));