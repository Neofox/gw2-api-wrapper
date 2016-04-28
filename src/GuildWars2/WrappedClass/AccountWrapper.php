<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 14:25
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

/**
 * Class AccountWrapper
 * @package GuildWars2\WrappedClass
 */
class AccountWrapper extends Wrapper
{

    /**
     * AccountWrapper constructor.
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
    public function getAccountInfo(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getAccountAchievement(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_ACHIEVEMENTS);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getAccountBank(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_BANK);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getAccountDyes(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_DYES);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getAccountInventory(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_INVENTORY);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getAccountMaterials(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_MATERIALS);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getAccountMinis(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_MINIS);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getAccountSkins(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_SKINS);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getAccountWallet(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_WALLET);

        return $this->callApi();
    }

}