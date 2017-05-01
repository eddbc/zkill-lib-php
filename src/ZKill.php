<?php namespace ZKill;

use GuzzleHttp\Client;
use JsonMapper;
use Psr\Http\Message\ResponseInterface;
use ZKill\Kill;

class ZKill {

	private $user_agent;
	private $query_str = "";

	/**
	 * Zkill constructor.
	 *
	 * @param $user_agent
	 */
	public function __construct( $user_agent = "" ) {
		$this->user_agent = $user_agent;
	}


	private function addQuery($query, $value = false){
		$add = $query."/";
		if($value){
			$add.=$value."/";
		}
		$this->query_str.=$add;
	}

	function character($character_id){
		$this->addQuery("character", $character_id);
		return $this;
	}

	function corp($corp_id){
		$this->addQuery("corp", $corp_id);
		return $this;
	}

	function alliance($alliance_id){
		$this->addQuery("alliance", $alliance_id);
		return $this;
	}

	function limit($limit){
		$this->addQuery("limit", $limit);
		return $this;
	}



	private function client() {
		return new Client([
			// Base URI is used with relative requests
			'base_uri' => 'https://zkillboard.com/api/',
			// You can set any number of default request options.
			'timeout'  => 2.0,
		]);
	}


	/**
	 * @return Kill[]
	 */
	function get() {

		/** @var ResponseInterface $resp */
		$resp =  $this->client()->request('GET', $this->query_str);
		$json = \GuzzleHttp\json_decode($resp->getBody());

		$mapper = new JsonMapper();
		/** @var Kill[] $killArr */
		$killArr = $mapper->mapArray(
			$json, array(), '\ZKill\Kill'
		);

		return $killArr;
	}
}