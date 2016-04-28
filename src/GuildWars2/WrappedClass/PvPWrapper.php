<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 18:52
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Exception\Gw2Exception;
use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

/**
 * Class PvPWrapper
 * @package GuildWars2\WrappedClass
 */
class PvPWrapper extends Wrapper
{

    /**
     * PvPWrapper constructor.
     *
     * @param bool $debug
     * @param bool $log
     */
    public function __construct(bool $debug = false, bool $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getPvPGames(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::PVP_GAMES);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     * @param array  $id
     * Must be ['id' => id] or ['ids' => id]
     *
     * @return array|\stdClass
     */
    public function getPvPGameInfo(string $apiKey, array $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::PVP_GAMES);

        return $this->callApi('', $id);
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getSeasons(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::PVP_SEASONS);

        return $this->callApi('', $option);
    }

    /**
     * @param array       $id
     * Must be ['world' => id] or ['id' => id] or [ids = 'ids']
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getSeasonInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::PVP_SEASONS);

        return $this->callApi('', $option);
    }


    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getPvPStats(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::PVP_STATS);

        return $this->callApi();
    }

}