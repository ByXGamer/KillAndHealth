<?php

namespace KillAndHealth;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	 public function onKill(PlayerDeathEvent $event){
        $cause = $event->getEntity()->getLastDamageCause();
        if($cause instanceof EntityDamageByEntityEvent){
            $olduren = $cause->getDamager();

				$olduren->setHealth(5);
		}
        return true;
	}
}