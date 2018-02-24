<?php namespace ZKill;

use JsonMapper;
use ZKill\Mappings\Kill;

class ZKillClient extends ZKillBaseClient {



    /*
     * Fetch Type  Modifiers
     */

    /**
     * @return ZKillClient
     */
    function losses(){
        return $this->addQuery('losses');
    }

    /**
     * @return ZKillClient
     */
    function kills(){
        return $this->addQuery('kills');
    }

    /**
     * @return ZKillClient
     */
    function w_space(){
        return $this->addQuery('w-space');
    }

    /**
     * @return ZKillClient
     */
    function solo(){
        return $this->addQuery('solo');
    }

    /**
     * @return ZKillClient
     */
    function finalBlow(){
        return $this->addQuery('finalblow-only');
    }

    /**
     * @param $bool Boolean
     * @return ZKillClient
     */
    function awox($bool){
        return $this->addQuery('awox', $bool?1:0);
    }

    /**
     * @param $bool Boolean
     * @return ZKillClient
     */
    function npm($bool){
        return $this->addQuery('npc', $bool?1:0);
    }




    /*
     * Fetch Modifiers
     */

    /**
     * @param $character_id
     * @return ZKillClient
     */
    function character($character_id){
		return $this->addQuery("characterID", $character_id);
	}

    /**
     * @param $corp_id
     * @return ZKillClient
     */
    function corporation($corp_id){
		return $this->addQuery("corporationID", $corp_id);
	}

    /**
     * @param $alliance_id
     * @return ZKillClient
     */
    function alliance($alliance_id){
		return $this->addQuery("allianceID", $alliance_id);
	}

    /**
     * @param $faction_id
     * @return ZKillClient
     */
    function faction($faction_id){
        return $this->addQuery("factionID", $faction_id);
    }

    /**
     * @param $ship_id
     * @return ZKillClient
     */
    function ship($ship_id){
        return $this->addQuery("shipTypeID", $ship_id);
    }

    /**
     * @param $group_id
     * @return ZKillClient
     */
    function group($group_id){
        return $this->addQuery("groupID", $group_id);
    }

    /**
     * @param $system_id
     * @return ZKillClient
     */
    function system($system_id){
        return $this->addQuery("solarSystemID", $system_id);
    }

    /**
     * @param $region_id
     * @return ZKillClient
     */
    function region($region_id){
        return $this->addQuery("regionID", $region_id);
    }

    /**
     * @param $war_id
     * @return ZKillClient
     */
    function war($war_id){
        return $this->addQuery("warID", $war_id);
    }

    /**
     * @param $iskValue
     * @return ZKillClient
     */
    function iskValue($iskValue){
        return $this->addQuery("iskValue", $iskValue);
    }



    /*
     * Information modifiers
     */

    /**
     * @return ZKillClient
     */
    function noItems(){
        return $this->addQuery('no-items');
    }

    /**
     * @return ZKillClient
     */
    function noAttackers(){
        return $this->addQuery('no-attackers');
    }

    /**
     * @return ZKillClient
     */
    function zkbOnly(){
        return $this->addQuery('zkbOnly');
    }





	/*
	 * Page / Time / Limit Modifiers
	 */

    /**
     * @param $limit
     * @return ZKillClient
     */
    function limit($limit){
		return $this->addQuery("limit", $limit);
	}

    /**
     * @param $page
     * @return ZKillClient
     */
    function page($page){
        return $this->addQuery("page", $page);
    }

    /**
     * @param $kill_id
     * @return $this
     */
    function kill($kill_id){
        return $this->addQuery('killID', $kill_id);
    }


    /**
     * @return Kill[]
     */
    public function get() {

        $json = $this->getJson();

        $mapper = new JsonMapper();
        /** @var Kill[] $killArr */
        $killArr = $mapper->mapArray(
            $json, array(), '\ZKill\Mappings\Kill'
        );

        return $killArr;
    }
}