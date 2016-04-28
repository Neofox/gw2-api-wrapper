<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 14:25
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Exception\Gw2Exception;
use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

/**
 * Class ItemWrapper
 * @package GuildWars2\WrappedClass
 */
class ItemWrapper extends Wrapper
{

    /**
     * ItemWrapper constructor.
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
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getItems(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::ITEMS);

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
    public function getItemInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::ITEMS);

        return $this->callApi('', $option);
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws Gw2Exception
     */
    public function getMaterials(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::MATERIALS);

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
    public function getMaterialInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::MATERIALS);

        return $this->callApi('', $option);
    }


    /**
     * @return array|\stdClass
     */
    public function getRecipes()
    {
        $this->setEndpoint(Endpoints::RECIPES);

        return $this->callApi();
    }


    /**
     * @param array $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return array|\stdClass
     */
    public function getRecipeInfo(array $id)
    {
        $this->setEndpoint(Endpoints::MATERIALS);

        return $this->callApi('', $id);
    }


    /**
     * @param string $id
     *
     * @return array|\stdClass
     */
    public function getRecipeSearchIngredient(string $id)
    {
        $this->setEndpoint(Endpoints::RECIPES_SEARCH);

        return $this->callApi('', ['input' => $id]);
    }


    /**
     * @param string $id
     *
     * @return array|\stdClass
     */
    public function getRecipeSearchCraft(string $id)
    {
        $this->setEndpoint(Endpoints::RECIPES_SEARCH);

        return $this->callApi('', ['output' => $id]);
    }


}