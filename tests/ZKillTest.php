<?php

use PHPUnit\Framework\TestCase;

class ZKillTest extends TestCase {

	function testBasic() {
		$zKill = new \ZKill\ZKillClient("");
		$kill = $zKill->get();
	}
}
