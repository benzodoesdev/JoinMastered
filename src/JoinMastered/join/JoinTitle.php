<?php

declare(strict_types=1);

namespace JoinMastered\join;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\network\mcpe\protocol\LevelEventPacket;

class JoinTitle implements Listener{



    public function onJoin(PlayerJoinEvent $event) : void{

        $player = $event->getPlayer();

        $title = "§l§5Cosmos§9PE §cFactions§r";

        $subtitle = "§5cosmospe1.buycraft.net";

        $pk = new LevelEventPacket();

        $pk->evid = LevelEventPacket::EVENT_GUARDIAN_CURSE;

        $pk->data = 1;

        $pk->position = $player->asVector3();

        $player->dataPacket($pk);

        $player->addTitle($title, $subtitle, 20, 20, 20);

    }

}
