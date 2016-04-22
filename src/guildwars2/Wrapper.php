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
        $result = '';

        $this->checkParameters($parameter);
        $response = $this->client->get($this->getVersion() . $this->endpoint . '/' . $parameter);
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
}