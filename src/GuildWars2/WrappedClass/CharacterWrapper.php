<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 20:26
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Exception\Gw2Exception;
use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

/**
 * Class CharacterWrapper
 * @package GuildWars2\WrappedClass
 */
class CharacterWrapper extends Wrapper
{
    /**
     * CharacterWrapper constructor.
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
    public function getCharacters(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::CHARACTERS);

        return $this->callApi();
    }

    /**
     * @param string $apiKey
     * @param string $charName
     *
     * @return array|\stdClass
     */
    public function getCharacterInfo(string $apiKey, string $charName)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::CHARACTERS);

        return $this->callApi($charName);
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getSkills(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::SKILLS);

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
    public function getSkillInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::SKILLS);

        return $this->callApi('', $option);
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getSkins(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::SKINS);

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
    public function getSkinInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::SKINS);

        return $this->callApi('', $option);
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getSpecializations(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::SPECIALIZATIONS);

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
    public function getSpecializationInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::SPECIALIZATIONS);

        return $this->callApi('', $option);
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getTraits(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::TRAITS);

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
    public function getTraitInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::TRAITS);

        return $this->callApi('', $option);
    }
}