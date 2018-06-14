<?php

namespace benzo;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents(new JoinMessage($this), $this);
        $this->getServer()->getPluginManager()->registerEvents(new JoinTitle($this), $this);
    }
}
