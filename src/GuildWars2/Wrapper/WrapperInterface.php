<?php

namespace GuildWars2\Wrapper;

/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 21/04/2016
 * Time: 20:18
 */
interface WrapperInterface
{
    public function callApi($params, $query);

    public function validateLanguage($lang);
}