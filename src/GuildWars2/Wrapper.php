<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 21/04/2016
 * Time: 20:42
 */

namespace GuildWars2;

/**
 * Class Wrapper
 * @package guildwars2
 */
class Wrapper extends AbstractGw2Wrapper
{
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
     * @param mixed|null $parameter
     * @param array      $queryOpt
     *
     * @return mixed
     * @throws \Exception
     * @throws \Gw2Exception
     */
    public function getResponse($parameter = null, $queryOpt = [])
    {
        if(!empty($this->getApiKey())){
            $queryOpt = array_merge($queryOpt, ['access_token' => $this->getApiKey()]);
        }
        $options = ['query' => $queryOpt];

        // For not messing with query param when no parameters are sets
        $parameter = (!empty($parameter) ? '/'.$parameter : null);
        $this->checkParameters($parameter);

        // Add some extra informations to the request
        if($this->getDebug()){
            $options = array_merge($options, ['debug' => true]);
        }
        $response = $this->client->get($this->getVersion() . $this->endpoint . $parameter, $options);
        $result = $response->getBody()->getContents();

        if ($response->getStatusCode() != 200) {
            $result = json_encode(['status' => $response->getStatusCode(), 'error' => json_decode($response->getBody())->text]);
        }

        return \GuzzleHttp\json_decode($result);
    }

    /**
     * @param $parameter
     *
     * @throws \Gw2Exception
     */
    public function checkParameters($parameter)
    {
        if(empty($this->getEndpoint())){
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
    public function getDebug() : bool
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
}