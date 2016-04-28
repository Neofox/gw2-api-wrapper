<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 15:17
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

class MapWrapper extends Wrapper
{
    
    
    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }

    public function getWorlds(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::WORLDS);

        return $this->callApi('', $option);
    }

    /**
     * @param array  $id
     * Must be ['id' => id], or ['ids' => id]
     *
     * @param string $lang
     *
     * @return mixed
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getWorldInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::WORLDS);

        return $this->callApi('', $option);
    }

    public function getContinents(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::CONTIINENTS);

        return $this->callApi('', $option);
    }

    public function getContinentInfo($id, string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::WORLDS);

        return $this->callApi($id, $option);
    }

    public function getMaps(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::MAPS);

        return $this->callApi('', $option);
    }

    // TODO: use subressources (floor, poi, etc)
    public function getMapInfo($id, string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::WORLDS);

        return $this->callApi($id, $option);
    }

}