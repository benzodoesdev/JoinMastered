<?php

namespace benzo;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    /** @var JoinMessage $joinmessage */
    private $joinmessage;
    /** @var JoinTitle $jointitle */
    private $jointitle;
    public function onEnable(){a
        $this->getServer()->getPluginManager()->registerEvents(new JoinMessage($this), $this);
        $this->getServer()->getPluginManager()->registerEvents(new JoinTitle($this), $this);
    }
}
