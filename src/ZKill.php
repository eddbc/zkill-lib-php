<?php namespace ZKill;

use function Sodium\add;

class ZKill extends ZKillBase {



    /*
     * Fetch Modifiers
     */

    /**
     * @return ZKill
     */
    function loss(){
        return $this->addQuery('loss');
    }

    /**
     * @param $character_id
     * @return ZKill
     */
    function character($character_id){
		return $this->addQuery("character", $character_id);
	}

    /**
     * @param $corp_id
     * @return ZKill
     */
    function corporation($corp_id){
		return $this->addQuery("corporation", $corp_id);
	}

    /**
     * @param $alliance_id
     * @return ZKill
     */
    function alliance($alliance_id){
		return $this->addQuery("alliance", $alliance_id);
	}

    /**
     * @param $faction_id
     * @return ZKill
     */
    function faction($faction_id){
        return $this->addQuery("faction", $faction_id);
    }

    /**
     * @param $ship_id
     * @return ZKill
     */
    function ship($ship_id){
        return $this->addQuery("ship", $ship_id);
    }

    /**
     * @param $group_id
     * @return ZKill
     */
    function group($group_id){
        return $this->addQuery("group", $group_id);
    }

    /**
     * @param $system_id
     * @return ZKill
     */
    function system($system_id){
        return $this->addQuery("system", $system_id);
    }

    /**
     * @param $region_id
     * @return ZKill
     */
    function region($region_id){
        return $this->addQuery("region", $region_id);
    }

    /**
     * @param $war_id
     * @return ZKill
     */
    function war($war_id){
        return $this->addQuery("war", $war_id);
    }

    /**
     * @param $iskValue
     * @return ZKill
     */
    function iskValue($iskValue){
        return $this->addQuery("iskValue", $iskValue);
    }





	/*
	 * Page / Time / Limit Modifiers
	 */

    /**
     * @param $limit
     * @return ZKill
     */
    function limit($limit){
		return $this->addQuery("limit", $limit);
	}
}