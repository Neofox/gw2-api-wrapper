<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 21/04/2016
 * Time: 22:41
 */
namespace GuildWars2\Wrapper;

class Endpoints
{
    // WvW
    const WVW_MATCHES    = '/wvw/matches';
    const WVW_OBJECTIVES = '/wvw/objectives';
    const WVW_ABILITIES  = '/wvw/abilities';

    // Account
    const ACCOUNT              = '/account';
    const ACCOUNT_ACHIEVEMENTS = '/account/achievements';
    const ACCOUNT_BANK         = '/account/bank';
    const ACCOUNT_DYES         = '/account/dyes';
    const ACCOUNT_INVENTORY    = '/account/inventory';
    const ACCOUNT_MATERIALS    = '/account/materials';
    const ACCOUNT_MINIS        = '/account/minis';
    const ACCOUNT_SKINS        = '/account/skins';
    const ACCOUNT_WALLET       = '/account/wallet';

    // Achievement
    const ACHIEVEMENTS                = '/achievements';
    const ACHIEVEMENTS_DAILY          = '/achievements/daily';
    const ACHIEVEMENTS_DAILY_TOMORROW = '/achievements/daily/tomorrow';
    const ACHIEVEMENTS_GROUPS         = '/achievements/groups';
    const ACHIEVEMENTS_CATEGORIES     = '/achievements/categories';

    // Characters
    const CHARACTERS                   = '/characters';
    const CHARACTERS_EQUIPMENT_2       = '/equipment';
    const CHARACTERS_INVENTORY_2       = '/inventory';
    const CHARACTERS_RECIPES_2         = '/recipes';
    const CHARACTERS_SPECIALIZATIONS_2 = '/specializations';

    // Commerce
    const COMMERCE_EXCHANGE     = '/commerce/exchange';
    const COMMERCE_LISTINGS     = '/commerce/listings';
    const COMMERCE_PRICES       = '/commerce/prices';
    const COMMERCE_TRANSACTIONS = '/commerce/transactions';

    // Event
    const EVENTS       = '/events';
    const EVENTS_STATE = '/events-state';

    // Guild
    const GUILD             = '/guild';
    const GUILD_LOG_2       = '/log';
    const GUILD_MEMBERS_2   = '/members';
    const GUILD_RANKS_2     = '/ranks';
    const GUILD_STASH_2     = '/stash';
    const GUILD_TEAMS_2     = '/teams';
    const GUILD_TREASURY_2  = '/treasury';
    const GUILD_UPGRADES_2  = '/upgrades';
    const GUILD_PERMISSIONS = '/guild/permissions';
    const GUILD_SEARCH      = '/guild/search';
    const GUILD_UPGRADES    = '/guild/upgrades';

    // PvP
    const PVP           = '/pvp';
    const PVP_AMULETS   = '/pvp/amulets';
    const PVP_GAMES     = '/pvp/games';
    const PVP_SEASONS   = '/pvp/seasons';
    const PVP_STANDINGS = '/pvp/standings';
    const PVP_STATS     = '/pvp/stats';

    // Recipes
    const RECIPES        = '/recips';
    const RECIPES_SEARCH = '/recips/search';

    // Misc
    const QUAGGANS        = '/quaggans';
    const WORLDS          = '/worlds';
    const BUILD           = '/build';
    const COLORS          = '/colors';
    const CONTIINENTS     = '/continents';
    const CURRENCIES      = '/currencies';
    const EMBLEM          = '/emblem';
    const FILES           = '/files';
    const ITEMS           = '/items';
    const ITEMSTATS       = '/itemstats';
    const LEADERBOARDS    = '/leaderboards';
    const LEGENDS         = '/legends';
    const MAPS            = '/maps';
    const MATERIALS       = '/materials';
    const MINIS           = '/minis';
    const PETS            = '/pets';
    const PROFESSIONS     = '/professions';
    const SKILLS          = '/skills';
    const SKINS           = '/skins';
    const SPECIALIZATIONS = '/specializations';
    const TITLES          = '/titles';
    const TOKENINFO       = '/tokeninfo';
    const TRAITS          = '/traits';
}