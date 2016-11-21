<?php

namespace jose\lobby;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as TE;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerInteractEvent;

class lobby extends PluginBase{
    
public $prefix = TE::GRAY."[".TE::GREEN."LOBBY".TE::GRAY."]";
    
	public function onEnable()
	{
		$this->getLogger()->info(TE::GREEN . "lobby jose ");
		 
        }
        
	public function onCommand(CommandSender $player, Command $cmd, $label, array $args) {
        switch($cmd->getName()){                
                        case "back":
                            if(empty($args[0]))
                            {
                                $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn(),0,0);
                            }
							$player->sendMessage($this->prefix . TE::YELLOW . "Bienvenido al lobby");
                            return true;
                            
                        case "lobby":
                            if(empty($args[0]))
                            {
                                $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn(),0,0);
								$player->sendMessage($this->prefix . TE::YELLOW . "Bienvenido al lobby");
                            }
							
                            return true;
                            
                        case "hub":
                            if(empty($args[0]))
                            {
                                $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn(),0,0);
								$player->sendMessage($this->prefix . TE::YELLOW . "Bienvenido al lobby");
                            }
							
                            return true;
							
					    case "spawn":
                            if(empty($args[0]))
                            {
                                $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn(),0,0);
								$player->sendMessage($this->prefix . TE::YELLOW . "Bienvenido al lobby");
                            }
							
                            return true;
							
					     case "home":
                            if(empty($args[0]))
                            {
                                $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn(),0,0);
								$player->sendMessage($this->prefix . TE::YELLOW . "Bienvenido al lobby");
                            }
							
                            return true;
							
							 case "exit":
                            if(empty($args[0]))
                            {
                                $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn(),0,0);
								$player->sendMessage($this->prefix . TE::YELLOW . "Bienvenido al lobby");
                            }
							
                            return true;

        }
        }
		
		
		public function onDeath(PlayerDeathEvent $event){
			
        $player->getInventory()->clearAll();
	$player->removeAllEffects();
	$player->setGamemode(0);
	
				
		}
		
		
		
		
		
		
		
		
		
		
		
}