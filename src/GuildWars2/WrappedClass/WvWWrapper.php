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
 * Class WvWWrapper
 * @package GuildWars2\WrappedClass
 */
class WvWWrapper extends Wrapper
{

    /**
     * WvWWrapper constructor.
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
    public function getMatches()
    {
        $this->setEndpoint(Endpoints::WVW_MATCHES);

        return $this->callApi();
    }

    /**
     * @param array $id
     * Must be ['world' => id] or ['id' => id] or [ids = 'ids']
     *
     * @return array|\stdClass
     */
    public function getMatcheInfo(array $id)
    {
        $this->setEndpoint(Endpoints::WVW_MATCHES);

        return $this->callApi('', $id);
    }

    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getObjectives(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::WVW_OBJECTIVES);

        return $this->callApi('', $option);
    }

    /**
     * @param array       $id
     * Must be ['world' => id] or ['id' => id] or [ids = 'ids']
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getObjectiveInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::WVW_OBJECTIVES);

        return $this->callApi('', $option);
    }
}