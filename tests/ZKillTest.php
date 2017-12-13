<?php

use PHPUnit\Framework\TestCase;

class ZKillTest extends TestCase {

    /**
     * Checks that getting a standard player ship killmail works
     * https://zkillboard.com/kill/66476592/
     */
	function testBasic() {
		$zKill = new \ZKill\ZKillClient("");

		// Get Nyx killmail (RIP sweet prince)
		$kill = $zKill->kill(66476592)->get()[0];

		// Check a variety of properties to check everything populated
		$this->assertEquals(
		    "e9cd841ce22bfe1b148818d43d3a8ff048b483a6",
            $kill->zkb->hash
        );
		$this->assertEquals(
            95453250,
            $kill->victim->character_id
        );
		$this->assertEquals(
            41057,
            $kill->victim->items[0]->item_type_id
        );
	}
}
