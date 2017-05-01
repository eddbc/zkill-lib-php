<?php namespace ZKill;

use GuzzleHttp\Client;
use JsonMapper;
use Psr\Http\Message\ResponseInterface;
use ZKill\Mappings\Kill;

abstract class ZKillBase {

	private $user_agent;
	private $query_str = "";
	protected $baseUrl = 'https://zkillboard.com/api/';

	/**
	 * Zkill constructor.
	 *
	 * @param $user_agent
	 */
	public function __construct( $user_agent = "" ) {
		$this->user_agent = $user_agent;
	}


	public function addQuery($query, $value = false){
		$add = $query."/";
		if($value){
			$add.=$value."/";
		}
		$this->query_str.=$add;
		return $this;
	}


	private function client() {
		return new Client([
			// Base URI is used with relative requests
			'base_uri' => $this->baseUrl,
			// You can set any number of default request options.
			'timeout'  => 2.0,
		]);
	}

	protected function request() {
		/** @var ResponseInterface $resp */
		$resp =  $this->client()->request('GET', $this->query_str, [
			'http_errors'   =>  true,
			'headers' => [
				'User-Agent' => $this->user_agent
			]
		]);
		echo $resp->getStatusCode();

		$json = \GuzzleHttp\json_decode($resp->getBody());
		return $json;
	}


	/**
	 * @return Kill[]
	 */
	public function get() {

		$json = $this->request();

		$mapper = new JsonMapper();
		/** @var Kill[] $killArr */
		$killArr = $mapper->mapArray(
			$json, array(), '\ZKill\Mappings\Kill'
		);

		return $killArr;
	}
}