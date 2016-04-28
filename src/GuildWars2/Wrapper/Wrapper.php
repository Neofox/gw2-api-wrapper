<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 21/04/2016
 * Time: 20:42
 */

namespace GuildWars2\Wrapper;

use GuildWars2\Exception\Gw2Exception;
use Zend\Log\Logger;

/**
 * Class Wrapper
 * @package GuildWars2\Wrapper
 */
class Wrapper extends AbstractGw2Wrapper
{

    /**
     * Call the API w/ Guzzle.
     * parameter is a parameter in the url. Ex: neoapi.com/{parameter}
     * queryOpt are optional querry parameters. In most case, it has to be ['id' => id] or ['ids' => id,id,id]
     * Ex : neoapi.com?id=123 (where queryOpt = ['id' => 123]
     *
     * @param string|null $parameter
     * @param array      $queryOpt
     *
     * @return array|\stdClass
     * @throws \Exception
     * @throws Gw2Exception
     */
    public function callApi(string $parameter = null, array $queryOpt = [])
    {
        if (!empty($this->getApiKey())) {
            $queryOpt = array_merge($queryOpt, ['access_token' => $this->getApiKey()]);
        }
        $options = ['query' => $queryOpt];

        // For not messing with query param when no parameters are sets
        $parameter = (!empty($parameter) ? '/' . $parameter : null);
        $this->checkParameters($parameter);

        // Add some extra informations to the request
        if ($this->isDebug()) {
            $options = array_merge($options, ['debug' => true]);
        }


        if ($this->log) {
            $this->logger->log(Logger::INFO,
                'Call to ' . $this->apiBase . $this->getVersion() . $this->endpoint . $parameter);
            $this->logger->log(Logger::INFO, json_encode($options));
        }

        $response = $this->client->get($this->getVersion() . $this->endpoint . $parameter, $options);
        $result = $response->getBody()->getContents();

        if (!in_array($response->getStatusCode(),
            ['200', '201', '202', '203', '204', '205', '206', '207', '208', '226'])
        ) {
            $textError = !empty(json_decode($response->getBody())) ? json_decode($response->getBody())->text : '';
            $result = json_encode([
                'status' => $response->getStatusCode(),
                'error'  => $textError,
            ]);
            if ($this->log) {
                $this->logger->log(Logger::ALERT,
                    'An error occured : status ' . $response->getStatusCode() . '. message : ' . $textError);
            }
        }

        return \GuzzleHttp\json_decode($result);
    }

}