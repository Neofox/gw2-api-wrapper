<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 14:24
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Exception\Gw2Exception;
use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

/**
 * Class MiscWrapper
 * @package GuildWars2\WrappedClass
 */
class MiscWrapper extends Wrapper
{

    /**
     * MiscWrapper constructor.
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
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return array|\stdClass
     */
    public function getQuagganInfo(array $id)
    {
        $this->setEndpoint(Endpoints::QUAGGANS);

        return $this->callApi('', $id);
    }

    /**
     * @return array|\stdClass
     */
    public function getQuaggans()
    {
        $this->setEndpoint(Endpoints::QUAGGANS);

        return $this->callApi();
    }

    /**
     * @return array|\stdClass
     */
    public function getBuild()
    {
        $this->setEndpoint(Endpoints::BUILD);

        return $this->callApi();
    }

    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getColors(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::COLORS);

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
    public function getColorInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::COLORS);

        return $this->callApi('', $option);
    }

    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getCurrencies(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::CURRENCIES);

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
    public function getCurrencyInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::CURRENCIES);

        return $this->callApi('', $option);
    }

    /**
     * @return array|\stdClass
     */
    public function getFiles()
    {
        $this->setEndpoint(Endpoints::FILES);

        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return array|\stdClass
     */
    public function getFileInfo(array $id)
    {
        $this->setEndpoint(Endpoints::FILES);

        return $this->callApi('', $id);
    }

    /**
     * @return array|\stdClass
     */
    public function getMinis()
    {
        $this->setEndpoint(Endpoints::MINIS);

        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return array|\stdClass
     */
    public function getMininfo(array $id)
    {
        $this->setEndpoint(Endpoints::MINIS);

        return $this->callApi('', $id);
    }

    /**
     * @param string $apiKey
     *
     * @return array|\stdClass
     */
    public function getTokenInfo(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::TOKENINFO);

        return $this->callApi();
    }

}