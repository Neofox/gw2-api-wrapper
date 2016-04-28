<?php


use GuildWars2\WrappedClass\MiscWrapper;
use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

require 'vendor/autoload.php';

// HARD WAY TO CALL THE API (but the most flexible)
$wrapper = (new Wrapper())->setDebug(false)->setLog(false);
$wrapper->setEndpoint(Endpoints::QUAGGANS);
$result = $wrapper->callApi('404');

// EASIER WAY TO CALL THE API
$wrappedCall = new MiscWrapper(false, true);
$wrappedResult = $wrappedCall->getQuagganInfo(['id' => '404']);

var_dump($wrappedResult);