<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 18:16
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

class CommerceWrapper extends Wrapper
{

    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }

    public function getCommerceExchange()
    {
        $this->setEndpoint(Endpoints::COMMERCE_EXCHANGE);
        return $this->callApi();
    }

    public function getExchanceCoins($quantity)
    {
        $this->setEndpoint(Endpoints::COMMERCE_EXCHANGE);
        return $this->callApi('coins', ['quantity' => $quantity]);
    }

    public function getExchanceGems($quantity)
    {
        $this->setEndpoint(Endpoints::COMMERCE_EXCHANGE);
        return $this->callApi('gems', ['quantity' => $quantity]);
    }

    public function getCommerceListings()
    {
        $this->setEndpoint(Endpoints::COMMERCE_LISTINGS);
        return $this->callApi();
    }

    /**
     * @param $id
     * Must be ['id' => id] or ['ids' => id]
     *
     * @return mixed
     */
    public function getCommerceListingInfo($id)
    {
        $this->setEndpoint(Endpoints::COMMERCE_LISTINGS);
        return $this->callApi('', $id);
    }

    public function getCommercePrices()
    {
        $this->setEndpoint(Endpoints::COMMERCE_PRICES);
        return $this->callApi();
    }

    /**
     * @param $id
     * Must be ['id' => id] or ['ids' => id]
     *
     * @return mixed
     */
    public function getCommercePriceInfo($id)
    {
        $this->setEndpoint(Endpoints::COMMERCE_PRICES);
        return $this->callApi('', $id);
    }

    public function getTransaction(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);
        return $this->callApi();
    }

    public function getTransactionCurrent(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);
        return $this->callApi('current');
    }

    public function getTransactionCurrentBuy(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);
        return $this->callApi('current/buy');
    }

    public function getTransactionCurrentSells(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);
        return $this->callApi('current/sells');
    }

    public function getTransactionHistory(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);
        return $this->callApi('history');
    }

    public function getTransactionHistoryBuy(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);
        return $this->callApi('history/buy');
    }

    public function getTransactionHistorySells(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);
        return $this->callApi('history/sells');
    }
}