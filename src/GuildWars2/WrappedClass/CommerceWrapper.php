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

/**
 * Class CommerceWrapper
 * @package GuildWars2\WrappedClass
 */
class CommerceWrapper extends Wrapper
{

    /**
     * CommerceWrapper constructor.
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
    public function getCommerceExchange()
    {
        $this->setEndpoint(Endpoints::COMMERCE_EXCHANGE);

        return $this->callApi();
    }

    /**
     * @param string $quantity
     *
     * @return array|\stdClass
     */
    public function getExchanceCoins(string $quantity)
    {
        $this->setEndpoint(Endpoints::COMMERCE_EXCHANGE);

        return $this->callApi('coins', ['quantity' => $quantity]);
    }

    /**
     * @param string $quantity
     *
     * @return array|\stdClass
     */
    public function getExchanceGems(string $quantity)
    {
        $this->setEndpoint(Endpoints::COMMERCE_EXCHANGE);

        return $this->callApi('gems', ['quantity' => $quantity]);
    }

    /**
     * @return array|\stdClass
     */
    public function getCommerceListings()
    {
        $this->setEndpoint(Endpoints::COMMERCE_LISTINGS);

        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['id' => id] or ['ids' => id]
     *
     * @return array|\stdClass
     */
    public function getCommerceListingInfo(array $id)
    {
        $this->setEndpoint(Endpoints::COMMERCE_LISTINGS);

        return $this->callApi('', $id);
    }

    /**
     * @return array|\stdClass
     */
    public function getCommercePrices()
    {
        $this->setEndpoint(Endpoints::COMMERCE_PRICES);

        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['id' => id] or ['ids' => id]
     *
     * @return array|\stdClass
     */
    public function getCommercePriceInfo(array $id)
    {
        $this->setEndpoint(Endpoints::COMMERCE_PRICES);

        return $this->callApi('', $id);
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getTransaction(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getTransactionCurrent(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);

        return $this->callApi('current');
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getTransactionCurrentBuy(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);

        return $this->callApi('current/buy');
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getTransactionCurrentSells(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);

        return $this->callApi('current/sells');
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getTransactionHistory(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);

        return $this->callApi('history');
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getTransactionHistoryBuy(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);

        return $this->callApi('history/buy');
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getTransactionHistorySells(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::COMMERCE_TRANSACTIONS);

        return $this->callApi('history/sells');
    }
}