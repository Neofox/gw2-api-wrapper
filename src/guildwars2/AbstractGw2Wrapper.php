<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 21/04/2016
 * Time: 20:37
 */

namespace guildwars2;


use GuzzleHttp\Client;
use WrapperInterface;

abstract class AbstractGw2Wrapper implements WrapperInterface
{
    /**
     * @var Client
     */
    protected $client;

    protected $apiBase = "https://api.guildwars2.com/";

    protected $version = 'v2';

    /**
     * Gw2Wrapper constructor.
     *
     */
    public function __construct()
    {
        $this->client = new Client(['base_uri' => $this->getApiBase(), 'http_errors' => false]);
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiBase()
    {
        return $this->apiBase;
    }

    /**
     * @param string $apiBase
     *
     * @return $this
     */
    public function setApiBase($apiBase)
    {
        $this->apiBase = $apiBase;
        return $this;
    }


}