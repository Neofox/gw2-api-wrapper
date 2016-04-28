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

class MiscWrapper extends Wrapper
{
    /**
     * @param bool $debug
     * @param bool $log
     */
    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }


    public function getQuagganInfo(string $id)
    {
        $this->setEndpoint(Endpoints::QUAGGANS);

        return $this->callApi($id);
    }

    public function getQuaggans()
    {
        $this->setEndpoint(Endpoints::QUAGGANS);

        return $this->callApi();
    }

    public function getBuild()
    {
        $this->setEndpoint(Endpoints::BUILD);

        return $this->callApi();
    }

    public function getColors(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::COLORS);

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
    public function getColorInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::COLORS);

        return $this->callApi('', $option);
    }

    public function getCurrencies(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::CURRENCIES);

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
    public function getCurrencyInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::CURRENCIES);

        return $this->callApi('', $option);
    }

    public function getFiles()
    {
        $this->setEndpoint(Endpoints::FILES);

        return $this->callApi();
    }


    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return mixed
     * @throws Gw2Exception
     */
    public function getFileInfo(array $id)
    {
        $this->setEndpoint(Endpoints::FILES);

        return $this->callApi('', $id);
    }

    public function getMinis()
    {
        $this->setEndpoint(Endpoints::MINIS);

        return $this->callApi();
    }


    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return mixed
     * @throws Gw2Exception
     */
    public function getMininfo(array $id)
    {
        $this->setEndpoint(Endpoints::MINIS);

        return $this->callApi('', $id);
    }

    public function getTokenInfo(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::TOKENINFO);

        return $this->callApi();
    }

}