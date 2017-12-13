<?php namespace ZKill;


class ZKillStatsClient extends ZKillBaseClient {

	public function __construct( $user_agent = "" ) {
		parent::__construct( $user_agent );
		$this->baseUrl.='stats/';
	}

	/*
	 * TODO: Map stats results
	 */
	public function get() {
        $json = $this->request();
        return $json;
    }

}