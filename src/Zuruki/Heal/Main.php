<?php

namespace Zuruki\Heal;

use pocketmine\plugin\PluginBase;
use pocketmine\events\Listener;
use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\level\particle\HeartParticle;

class Main extends PluginBase implements Listener {
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch($command->getName()){
		case "heal":
		$prefix = TF::GREY . "[" TF::RED . "HealPE" TF::GREY . "]";
		$healMessage = TF::RED . "You've been healed!"
		$player = $sender->getEntity();
		$player->setMaxHealth(20);
		$player->setHealth(20);
		$player->getLevel()->addParticle(new HeartParticle($player->add(0,2),4));.
		$sender->sendMessage($prefix, $healMessage);
		return true;
