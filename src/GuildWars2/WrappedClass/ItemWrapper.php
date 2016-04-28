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

class ItemWrapper extends Wrapper
{

    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }


    public function getItems(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::ITEMS);

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
    public function getItemInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::ITEMS);

        return $this->callApi('', $option);
    }


    public function getMaterials(string $lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::MATERIALS);

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
    public function getMaterialInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::MATERIALS);

        return $this->callApi('', $option);
    }


    public function getRecipes()
    {
        $this->setEndpoint(Endpoints::RECIPES);

        return $this->callApi();
    }


    /**
     * @param array       $id
     * Must be ['id' => id] or [ids = 'ids']
     *
     * @return mixed
     * @throws Gw2Exception
     */
    public function getRecipeInfo(array $id)
    {
        $this->setEndpoint(Endpoints::MATERIALS);

        return $this->callApi('', $id);
    }


    public function getRecipeSearchIngredient($id)
    {
        $this->setEndpoint(Endpoints::RECIPES_SEARCH);

        return $this->callApi('', ['input' => $id]);
    }


    public function getRecipeSearchCraft($id)
    {
        $this->setEndpoint(Endpoints::RECIPES_SEARCH);

        return $this->callApi('', ['output' => $id]);
    }




}