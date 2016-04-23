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

    protected $apiKey;

    /**
     * Wrapper constructor.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param null $parameter
     *
     * @return mixed
     * @throws \Exception
     * @throws \Gw2Exception
     */
    public function getResponse($parameter = null)
    {
        if(empty($this->getEndpoint())){
            throw new \Exception('An endpoint is required ');
        }

        $this->checkParameters($parameter);
        if(!empty($this->getApiKey())){
            $response = $this->client->get($this->getVersion() . $this->endpoint . '/' . $parameter, [
                'query' => [ 'access_token' => $this->getApiKey() ]
            ]);
        }else {
            $response = $this->client->get($this->getVersion() . $this->endpoint . '/' . $parameter);
        }
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
        if (!empty($parameter) && (!is_int($parameter) && !is_string($parameter))) {
            throw new \Gw2Exception(sprintf('the parameter %s must be compatible', $parameter));
        }
        //TODO: check if parameter is string if its an id or a list of ids

    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     *
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param mixed $apiKey
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }
}