<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 21/04/2016
 * Time: 20:18
 */
namespace GuildWars2\Wrapper;

/**
 * Interface WrapperInterface
 * @package GuildWars2\Wrapper
 */
interface WrapperInterface
{
    /**
     * @param string $params
     * @param array  $query
     *
     * @return mixed
     */
    public function callApi(string $params, array $query);

    /**
     * @param string $lang
     *
     * @return mixed
     */
    public function validateLanguage(string $lang);
}