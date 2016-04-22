<?php

use guildwars2\Endpoints;

require 'vendor/autoload.php';

$wrapper = new \guildwars2\Wrapper(Endpoints::WVW_MATCHES);
$result = $wrapper->getResponse();
