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

    /**
     * @var string
     */
    protected $apiBase = "https://api.guildwars2.com/";

    /**
     * @var string
     */
    protected $version = 'v2';

    /**
     * @var bool
     */
    protected $log = false;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var string
     */
    protected $endpoint;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var bool
     */
    protected $debug = false;


    /**
     * Gw2Wrapper constructor.
     *
     */
    public function __construct()
    {
        if ($this->log) {
            $this->createLogger();
        }

        // Http errors are set to false because we handle it in an other way
        $this->client = new Client(['base_uri' => $this->getApiBase(), 'http_errors' => false]);
    }

    protected function createLogger($filename = 'log/api_call.log')
    {
        $dirname = dirname($filename);
        if (!is_dir($dirname)) {
            mkdir($dirname, 0755, true);
        }
        $this->logger = new Logger();
        $this->logger->addWriter(new Stream($filename));
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
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @return $this
     */
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDebug() : bool
    {
        return $this->debug;
    }

    /**
     * @param bool $debug
     *
     * @return $this
     */
    public function setDebug(bool $debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isLog()
    {
        return $this->log;
    }

    /**
     * @param boolean $log
     *
     * @return $this
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * @param $parameter
     *
     * @throws \Gw2Exception
     */
    protected function checkParameters($parameter)
    {
        if (empty($this->getEndpoint())) {
            throw new \Gw2Exception('An endpoint is required ');
        }
        if (!empty($parameter) && (!is_int($parameter) && !is_string($parameter))) {
            throw new \Gw2Exception(sprintf('the parameter %s must be compatible', $parameter));
        }
    }

    /**
     * @return string
     */
    public function getEndpoint() : string
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     *
     * @return $this
     */
    public function setEndpoint(string $endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

}