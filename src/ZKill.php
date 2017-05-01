<?php namespace ZKill;

class ZKill extends ZKillBase {

	function character($character_id){
		return $this->addQuery("character", $character_id);
	}

	function corp($corp_id){
		return $this->addQuery("corp", $corp_id);
	}

	function alliance($alliance_id){
		return $this->addQuery("alliance", $alliance_id);
	}

	function limit($limit){
		return $this->addQuery("limit", $limit);
	}
}