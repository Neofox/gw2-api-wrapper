<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 21/04/2016
 * Time: 20:37
 */

namespace GuildWars2;


use GuzzleHttp\Client;
use WrapperInterface;
use Zend\Log\Logger;
use Zend\Log\Writer\Stream;

abstract class AbstractGw2Wrapper implements WrapperInterface
{
    /**
     * @var Client
     */
    protected $client;

    protected $apiBase = "https://api.guildwars2.com/";

    protected $version = 'v2';

    protected $log = false;

    protected $logger;

    /**
     * Gw2Wrapper constructor.
     *
     */
    public function __construct()
    {
        if($this->log){
            $this->logger = new Logger();
            $writer = new Stream('log/api_call.log');
            $this->logger->addWriter($writer);
        }
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