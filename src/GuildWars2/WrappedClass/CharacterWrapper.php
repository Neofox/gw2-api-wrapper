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

class CharacterWrapper extends Wrapper
{
    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }

    public function getCharacters(string $apiKey)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::CHARACTERS);

        return $this->callApi();
    }

    public function getCharacterInfo(string $apiKey, string $charName)
    {
        $this->setApiKey($apiKey);
        $this->setEndpoint(Endpoints::CHARACTERS);

        return $this->callApi($charName);
    }


    public function getSkills(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::SKILLS);

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
    public function getSkillInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::SKILLS);

        return $this->callApi('', $option);
    }


    public function getSkins(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::SKINS);

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
    public function getSkinInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::SKINS);

        return $this->callApi('', $option);
    }


    public function getSpecializations(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::SPECIALIZATIONS);

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
    public function getSpecializationInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::SPECIALIZATIONS);

        return $this->callApi('', $option);
    }


    public function getTraits(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::TRAITS);

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
    public function getTraitInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::TRAITS);

        return $this->callApi('', $option);
    }
}