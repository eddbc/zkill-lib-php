<?php namespace ZKill;

use function Sodium\add;

class ZKill extends ZKillBase {



    /*
     * Fetch Type  Modifiers
     */

    /**
     * @return ZKill
     */
    function losses(){
        return $this->addQuery('losses');
    }

    /**
     * @return ZKill
     */
    function kills(){
        return $this->addQuery('kills');
    }

    /**
     * @return ZKill
     */
    function w_space(){
        return $this->addQuery('w-space');
    }

    /**
     * @return ZKill
     */
    function solo(){
        return $this->addQuery('solo');
    }

    /**
     * @return ZKill
     */
    function finalBlow(){
        return $this->addQuery('finalblow-only');
    }

    /**
     * @param $bool Boolean
     * @return ZKill
     */
    function awox($bool){
        return $this->addQuery('awox', $bool?1:0);
    }

    /**
     * @param $bool Boolean
     * @return ZKill
     */
    function npm($bool){
        return $this->addQuery('npc', $bool?1:0);
    }




    /*
     * Fetch Modifiers
     */

    /**
     * @param $character_id
     * @return ZKill
     */
    function character($character_id){
		return $this->addQuery("characterID", $character_id);
	}

    /**
     * @param $corp_id
     * @return ZKill
     */
    function corporation($corp_id){
		return $this->addQuery("corporationID", $corp_id);
	}

    /**
     * @param $alliance_id
     * @return ZKill
     */
    function alliance($alliance_id){
		return $this->addQuery("allianceID", $alliance_id);
	}

    /**
     * @param $faction_id
     * @return ZKill
     */
    function faction($faction_id){
        return $this->addQuery("factionID", $faction_id);
    }

    /**
     * @param $ship_id
     * @return ZKill
     */
    function ship($ship_id){
        return $this->addQuery("shipTypeID", $ship_id);
    }

    /**
     * @param $group_id
     * @return ZKill
     */
    function group($group_id){
        return $this->addQuery("groupID", $group_id);
    }

    /**
     * @param $system_id
     * @return ZKill
     */
    function system($system_id){
        return $this->addQuery("solarSystemID", $system_id);
    }

    /**
     * @param $region_id
     * @return ZKill
     */
    function region($region_id){
        return $this->addQuery("regionID", $region_id);
    }

    /**
     * @param $war_id
     * @return ZKill
     */
    function war($war_id){
        return $this->addQuery("warID", $war_id);
    }

    /**
     * @param $iskValue
     * @return ZKill
     */
    function iskValue($iskValue){
        return $this->addQuery("iskValue", $iskValue);
    }



    /*
     * Information modifiers
     */

    /**
     * @return ZKill
     */
    function noItems(){
        return $this->addQuery('no-items');
    }

    /**
     * @return ZKill
     */
    function noAttackers(){
        return $this->addQuery('no-attackers');
    }

    /**
     * @return ZKill
     */
    function zkbOnly(){
        return $this->addQuery('zkbOnly');
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

    /**
     * @param $page
     * @return ZKill
     */
    function page($page){
        return $this->addQuery("page", $page);
    }
}