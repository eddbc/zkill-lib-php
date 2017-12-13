<?php

use PHPUnit\Framework\TestCase;

class ZKillTest extends TestCase {

	function testBasic() {
		$zKill = new \ZKill\ZKill("");
		$kill = $zKill->get();
	}
}
