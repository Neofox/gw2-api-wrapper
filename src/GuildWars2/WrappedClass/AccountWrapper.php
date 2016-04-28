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

class AccountWrapper extends Wrapper
{

    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }

    public function getAccountInfo(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT);

        return $this->callApi();
    }

    public function getAccountAchievement(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_ACHIEVEMENTS);

        return $this->callApi();
    }

    public function getAccountBank(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_BANK);

        return $this->callApi();
    }

    public function getAccountDyes(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_DYES);

        return $this->callApi();
    }

    public function getAccountInventory(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_INVENTORY);

        return $this->callApi();
    }

    public function getAccountMaterials(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_MATERIALS);

        return $this->callApi();
    }

    public function getAccountMinis(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_MINIS);

        return $this->callApi();
    }

    public function getAccountSkins(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_SKINS);

        return $this->callApi();
    }

    public function getAccountWallet(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::ACCOUNT_WALLET);

        return $this->callApi();
    }

}