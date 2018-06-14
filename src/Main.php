
<?php

declare(strict_types=1);

namespace JoinMastered;

use JoinMastered\join\JoinMessage;
use JoinMastered\join\JoinTitle;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    /** @var JoinMessage $joinmessage */
    private $joinmessage;
    /** @var JoinTitle $jointitle */
    private $jointitle;
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents(new JoinMessage($this), $this);
        $this->getServer()->getPluginManager()->registerEvents(new JoinTitle($this), $this);
    }
}