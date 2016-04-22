<?php

use GuildWars2\Endpoints;

require 'vendor/autoload.php';

$wrapper = new \guildwars2\Wrapper(Endpoints::WVW_OBJECTIVES);
$result = $wrapper->getResponse(getenv('PARAMETER'));

r($result);
