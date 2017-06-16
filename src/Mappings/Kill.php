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

    /**
     * Returns the kill ID as a string.
     * Only intended to be used for comparing Kill objects by built-in PHP functions etc
     * 
     * @return string
     */
	public function __toString()
    {
        return (string) $this->killID;
    }

}