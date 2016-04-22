<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 21/04/2016
 * Time: 20:42
 */

namespace guildwars2;

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
     * Wrapper constructor.
     *
     * @param string $endpoint
     */
    public function __construct($endpoint)
    {
        parent::__construct();
        $this->endpoint = $endpoint;
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
        $this->checkParameters($parameter);
        $response = $this->client->get($this->getVersion() . $this->endpoint . '/' . $parameter);

        if ($response->getStatusCode() != 200) {
            throw new \Exception(sprintf('The api respond if a %s status. %s', $response->getStatusCode(),
                $response->getReasonPhrase()));
        }

        return \GuzzleHttp\json_decode($response->getBody()->getContents());
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
}