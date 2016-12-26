<?php
namespace Megapix96;

use pocketmine\entity\Entity;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

	const PLAYER_SIZE = 0.3;

	function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getLogger()->info("§7 >> §aMiniWorld §9Enabled§7 <<");
	}

	function onJoin(PlayerJoinEvent $ev){
		$p = $ev->getPlayer();
		$p->setDataProperty(Entity::DATA_SCALE, Entity::DATA_TYPE_FLOAT, self::PLAYER_SIZE);
	}

}