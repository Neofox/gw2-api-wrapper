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

class PvPWrapper extends Wrapper
{

    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }

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
     * @return mixed
     */
    public function getPvPGameInfo(string $apiKey, array $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::PVP_GAMES);

        return $this->callApi('', $id);
    }


    public function getSeasons($lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::PVP_SEASONS);

        return $this->callApi('', $option);
    }

    /**
     * @param array       $id
     * Must be ['world' => id] or ['id' => id] or [ids = 'ids']
     *
     * @param string|null $lang
     *
     * @return mixed
     * @throws Gw2Exception
     */
    public function getSeasonInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::PVP_SEASONS);

        return $this->callApi('', $option);
    }


    public function getPvPStats(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::PVP_STATS);

        return $this->callApi();
    }

}