<?php

/*
 * CustomAlerts (v1.7) by EvolSoft
 * Developer: EvolSoft (Flavius12)
 * Website: http://www.evolsoft.tk
 * Date: 09/05/2015 01:47 PM (UTC)
 * Copyright & License: (C) 2014-2015 EvolSoft
 * Licensed under MIT (https://github.com/EvolSoft/CustomAlerts/blob/master/LICENSE)
 */

namespace CustomAlerts\Events;

use pocketmine\event\plugin\PluginEvent;
use pocketmine\Player;

class CustomAlertsOutdatedServerKickEvent extends PluginEvent {
	
	public static $handlerList = null;
	
	/** @var Player $player */
	private $player;
	
	/**
	 * @param Player $player
	 */
	public function __construct(Player $player,$plugin){
		$this->player = $player;
		parent::__construct($plugin);
	}

	/**
	 * Get outdated server kick event player
	 * 
	 * @return Player
	 */
	public function getPlayer(){
		return $this->player;
	}
}
?>
