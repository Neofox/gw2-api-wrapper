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

class GuildWrapper extends Wrapper
{

    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }

    public function getEmblemForegrounds()
    {
        $this->setEndpoint(Endpoints::EMBLEM);
        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return mixed
     */
    public function getEmblemForegroundInfo(array $id)
    {
        $this->setEndpoint(Endpoints::EMBLEM);
        return $this->callApi('', $id);
    }

    public function getEmblemBackgrounds()
    {
        $this->setEndpoint(Endpoints::EMBLEM);
        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return mixed
     */
    public function getEmblemBackgroundInfo(array $id)
    {
        $this->setEndpoint(Endpoints::EMBLEM);
        return $this->callApi('', $id);
    }

    public function getGuildLog(string $apiKey, $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/".$id . Endpoints::GUILD_LOG_2);
        return $this->callApi();
    }

    public function getGuildMembers(string $apiKey, $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/".$id . Endpoints::GUILD_MEMBERS_2);
        return $this->callApi();
    }

    public function getGuildRanks(string $apiKey, $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/".$id . Endpoints::GUILD_RANKS_2);
        return $this->callApi();
    }

    public function getGuildStash(string $apiKey, $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/".$id . Endpoints::GUILD_STASH_2);
        return $this->callApi();
    }

    public function getGuildTreasury(string $apiKey, $id)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::GUILD . "/".$id . Endpoints::GUILD_TREASURY_2);
        return $this->callApi();
    }


    public function getGuildPermissions(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::GUILD_PERMISSIONS);

        return $this->callApi('', $option);
    }


    /**
     * @param array       $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @param string|null $lang
     *
     * @return mixed
     * @throws Gw2Exception
     */
    public function getGuildPermissionInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::GUILD_PERMISSIONS);

        return $this->callApi('', $option);
    }


    public function getGuildUpgrades(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::GUILD_UPGRADES);

        return $this->callApi('', $option);
    }


    /**
     * @param array       $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @param string|null $lang
     *
     * @return mixed
     * @throws Gw2Exception
     */
    public function getGuildUpgradeInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::GUILD_UPGRADES);

        return $this->callApi('', $option);
    }



}