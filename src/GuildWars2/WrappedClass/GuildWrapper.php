<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 18:40
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Exception\Gw2Exception;
use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

/**
 * Class GuildWrapper
 * @package GuildWars2\WrappedClass
 */
class GuildWrapper extends Wrapper
{

    /**
     * GuildWrapper constructor.
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
     * @return array|\stdClass
     */
    public function getEmblemForegrounds()
    {
        $this->setEndpoint(Endpoints::EMBLEM);

        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return array|\stdClass
     */
    public function getEmblemForegroundInfo(array $id)
    {
        $this->setEndpoint(Endpoints::EMBLEM);

        return $this->callApi('', $id);
    }

    /**
     * @return array|\stdClass
     */
    public function getEmblemBackgrounds()
    {
        $this->setEndpoint(Endpoints::EMBLEM);

        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return array|\stdClass
     */
    public function getEmblemBackgroundInfo(array $id)
    {
        $this->setEndpoint(Endpoints::EMBLEM);

        return $this->callApi('', $id);
    }

    /**
     * @param string $apiKey
     * @param string $id
     *
     * @return array|\stdClass
     */
    public function getGuildLog(string $apiKey, string $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/" . $id . Endpoints::GUILD_LOG_2);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     * @param string $id
     *
     * @return array|\stdClass
     */
    public function getGuildMembers(string $apiKey, string $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/" . $id . Endpoints::GUILD_MEMBERS_2);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     * @param string $id
     *
     * @return array|\stdClass
     */
    public function getGuildRanks(string $apiKey, string $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/" . $id . Endpoints::GUILD_RANKS_2);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     * @param        $id
     *
     * @return array|\stdClass
     */
    public function getGuildStash(string $apiKey, $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/" . $id . Endpoints::GUILD_STASH_2);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     * @param string $id
     *
     * @return array|\stdClass
     */
    public function getGuildTreasury(string $apiKey, string $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/" . $id . Endpoints::GUILD_TREASURY_2);

        return $this->callApi();
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getGuildPermissions(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::GUILD_PERMISSIONS);

        return $this->callApi('', $option);
    }


    /**
     * @param array       $id
     * Must be ['id' => id] or [ids = 'ids']
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getGuildPermissionInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::GUILD_PERMISSIONS);

        return $this->callApi('', $option);
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getGuildUpgrades(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::GUILD_UPGRADES);

        return $this->callApi('', $option);
    }


    /**
     * @param array       $id
     * Must be ['id' => id] or [ids = 'ids']
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getGuildUpgradeInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::GUILD_UPGRADES);

        return $this->callApi('', $option);
    }


}