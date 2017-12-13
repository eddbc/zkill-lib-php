<?php namespace ZKill;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

abstract class ZKillBaseClient {

	private $user_agent;
	private $query_str = "";
	protected $baseUrl = 'https://zkillboard.com/api/';

    /**
     * Zkill constructor.
     *
     * @param string $user_agent
     * @param array $options
     */
	public function __construct( $user_agent , $options = []) {
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
			'timeout'  => 5.0,
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

		$json = \GuzzleHttp\json_decode($resp->getBody());
		$this->clear();
		return $json;
	}

	public abstract function get();

	public function clear(){
	    $this->query_str = "";
    }
}