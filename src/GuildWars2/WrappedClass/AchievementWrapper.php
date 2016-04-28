<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 28/04/2016
 * Time: 17:26
 */

namespace GuildWars2\WrappedClass;


use GuildWars2\Wrapper\Endpoints;
use GuildWars2\Wrapper\Wrapper;

class AchievementWrapper extends Wrapper
{
    public function __construct($debug = false, $log = false)
    {
        parent::__construct();
        $this->log = $log;
        $this->debug = $debug;
    }


    public function getAchievements($lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::ACHIEVEMENTS);

        return $this->callApi('', $option);
    }

    /**
     * @param array       $id
     * must be ['id' => id] or ['ids' => id]
     * @param string|null $lang
     *
     * @return mixed
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getAchievementInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::ACHIEVEMENTS);

        return $this->callApi('', $option);
    }

    public function getAchievementsCategories($lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_CATEGORIES);

        return $this->callApi('', $option);
    }


    /**
     * @param array       $id
     * must be ['id' => id] or ['ids' => id]
     * @param string|null $lang
     *
     * @return mixed
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getAchievementsCategoryInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_CATEGORIES);

        return $this->callApi('', $option);
    }

    public function getAchievementsDaily()
    {
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_DAILY);

        return $this->callApi();
    }

    public function getAchievementsDailyTomorrow()
    {
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_DAILY_TOMORROW);

        return $this->callApi();
    }


    public function getAchievementsGroups($lang = null)
    {
        $option = $this->validateLanguage($lang);
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_GROUPS);

        return $this->callApi('', $option);
    }

    /**
     * @param array       $id
     * must be ['id' => id] or ['ids' => id]
     * @param string|null $lang
     *
     * @return mixed
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getAchievementsGroupInfo(array $id, string $lang = null)
    {
        $option = array_merge($id , $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_GROUPS);

        return $this->callApi('', $option);
    }


}