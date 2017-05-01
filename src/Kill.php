<?php namespace ZKill;


/*
    "killID": 61874071,
    "solarSystemID": 30001076,
    "killTime": "2017-04-27 20:13:46",
    "moonID": 0,
    "victim": {
		...
    },
    "attackers": [
		...
    ],
    "items": [
		...
    ],
    "position": {
		...
    },
    "zkb": {
		...
    }
 */
use ZKill\Victim;

class Kill {

	/** @var int $killID */
	public $killID;
	/** @var int $solarSystemID */
	public $solarSystemID;
	/** @var int $killTime */
	public $killTime;

	/** @var Victim $victim */
	public $victim;


}