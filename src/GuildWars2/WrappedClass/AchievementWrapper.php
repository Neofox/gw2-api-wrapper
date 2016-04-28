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

/**
 * Class AchievementWrapper
 * @package GuildWars2\WrappedClass
 */
class AchievementWrapper extends Wrapper
{
    /**
     * AchievementWrapper constructor.
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
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getAchievements(string $lang = null)
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
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::ACHIEVEMENTS);

        return $this->callApi('', $option);
    }

    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getAchievementsCategories(string $lang = null)
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
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getAchievementsCategoryInfo(array $id, string $lang = null)
    {
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_CATEGORIES);

        return $this->callApi('', $option);
    }

    /**
     * @return array|\stdClass
     */
    public function getAchievementsDaily()
    {
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_DAILY);

        return $this->callApi();
    }

    /**
     * @return array|\stdClass
     */
    public function getAchievementsDailyTomorrow()
    {
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_DAILY_TOMORROW);

        return $this->callApi();
    }


    /**
     * @param string|null $lang
     *
     * @return array|\stdClass
     * @throws \GuildWars2\Exception\Gw2Exception
     */
    public function getAchievementsGroups(string $lang = null)
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
        $option = array_merge($id, $this->validateLanguage($lang));
        $this->setEndpoint(Endpoints::ACHIEVEMENTS_GROUPS);

        return $this->callApi('', $option);
    }


}