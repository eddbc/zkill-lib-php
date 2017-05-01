<?php namespace ZKill;


class ZKillStats extends ZKillBase {

	public function __construct( $user_agent = "" ) {
		parent::__construct( $user_agent );
		$this->baseUrl.='stats/';
	}


}