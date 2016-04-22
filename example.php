<?php

use guildwars2\Endpoints;

require 'vendor/autoload.php';

$wrapper = new \guildwars2\Wrapper(Endpoints::WVW_OBJECTIVES);
$result = $wrapper->getResponse('38-1');

r($result);