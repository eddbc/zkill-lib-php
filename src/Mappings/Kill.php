<?php namespace ZKill\Mappings;

class Kill {

	/** @var int $kill_id */
	public $killmail_id;

    /** @var \Carbon\Carbon $killmail_time */
    public $killmail_time;

	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $moon_id */
	public $moon_id;

	/** @var Victim $victim */
	public $victim;

	/** @var Attacker[] $attackers */
	public $attackers;

	/** @var ZKB $zkb */
	public $zkb;

    /**
     * Returns the ZKillboard kill hash as a string.
     * Mainly intended to be used for comparing Kill objects by built-in PHP functions etc
     *
     * @return string
     */
	public function __toString()
    {
        return (string) $this->zkb->hash;
    }

}