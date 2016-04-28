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

/**
 * Class MapWrapper
 * @package GuildWars2\WrappedClass
 */
class MapWrapper extends Wrapper
{


    /**
     * MapWrapper constructor.
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
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getWorlds(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::WORLDS);

        return $this->callApi('', $option);
    }

    /**
     * @param array       $id
     * Must be ['id' => id], or ['ids' => id]
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getWorldInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::WORLDS);

        return $this->callApi('', $option);
    }

    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getContinents(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::CONTIINENTS);

        return $this->callApi('', $option);
    }

    /**
     * @param string      $id
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getContinentInfo(string $id, string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::WORLDS);

        return $this->callApi($id, $option);
    }

    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getMaps(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::MAPS);

        return $this->callApi('', $option);
    }

    // TODO: use subressources (floor, poi, etc)
    /**
     * @param string      $id
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getMapInfo(string $id, string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::WORLDS);

        return $this->callApi($id, $option);
    }

}