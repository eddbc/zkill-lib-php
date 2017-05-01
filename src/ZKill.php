<?php namespace ZKill;

use GuzzleHttp\Client;
use JsonMapper;
use Psr\Http\Message\ResponseInterface;
use ZKill\Kill\Kill;

class ZKill {

	private $user_agent;

	/**
	 * Zkill constructor.
	 *
	 * @param $user_agent
	 */
	public function __construct( $user_agent = "" ) {
		$this->user_agent = $user_agent;
	}


	/**
	 * @param $corp_id
	 *
	 * @return $this
	 */
	function corp($corp_id){

		return $this;
	}

	/**
	 * @param $alliance_id
	 *
	 * @return $this
	 */
	function alliance($alliance_id){

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
		$resp =  $this->client()->request('GET', 'character/91872672/limit/5/');
		$json = \GuzzleHttp\json_decode($resp->getBody());

		$mapper = new JsonMapper();
		/** @var Kill[] $killArr */
		$killArr = $mapper->mapArray(
			$json, array(), '\ZKill\Kill\Kill'
		);

		return $killArr;
	}
}