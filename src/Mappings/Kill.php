<?php namespace ZKill\Mappings;

class Kill {

	/** @var int $killID */
	public $killID;

	/** @var int $solarSystemID */
	public $solarSystemID;

	/** @var \Carbon\Carbon $killTime */
	public $killTime;

	/** @var int $moonID */
	public $moonID;

	/** @var Victim $victim */
	public $victim;

	/** @var Attacker[] $attackers */
	public $attackers;

	/** @var Item[] $items */
	public $items;

	/** @var Position $position */
	public $position;

	/** @var ZKB $zkb */
	public $zkb;


}