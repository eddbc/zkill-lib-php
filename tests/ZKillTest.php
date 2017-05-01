<?php

use PHPUnit\Framework\TestCase;

class ZKillTest extends TestCase {

	function testBasic() {
		$zKill = new \ZKill\ZKill();
		$resp = $zKill->get();

		$this->assertEquals(
			$resp->getStatusCode(),
			200
		);
	}
}
