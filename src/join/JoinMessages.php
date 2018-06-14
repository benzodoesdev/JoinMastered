<?php

declare(strict_types=1);

namespace JoinMastered\JoinMessages

use pocketmine/event/Listener;
use pocketmine/event/PLayerJoinEvent;

class JoinMessage implements listner{

    public function onJoin(PlayerJoinEvent $event) : void{
        $player = $event->getPlayer();
        $player->sendMessage("§€");
        $player->sendMessage("§l§6» §aWelcome To §5Cosmos§9PE §c!");
        $player->sendMessage("§e- §3Twitter: §e@§5Cosmos§9PE");
        $player->sendMessage("§e- §3Store: §5cosmospe1§9.§5buycraft§9.§5net");
        $player->sendMessage("§e- §3Discord: <>");
        $player->sendMessage("§e- §3Features:: §cFactions");
        $player->sendMessage("§€");
        $player->sendMessage("§e- §6Make Sure to Read are Rules before playing!");
        $player->sendMessage("§e- §6Voting earns you a free voting key!");
        $player->sendMessage("§e- §6Donating Rewards you with cool Perks a/an abilites);
        $player->sendMessage("§€");
    }
}
