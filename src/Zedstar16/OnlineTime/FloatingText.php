<?php

namespace Zedstar16\OnlineTime;

use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\math\Vector3;

class FloatingText extends FloatingTextParticle{

    public function __construct(Main $pl, Vector3 $pos){
     parent::__construct($pos, "", "");
     $this->level = $pl->getServer()->getDefaultLevel();
     $this->pos = $pos;
    }

    public function setText(string $text):void{
     $this->text = $text;
     $this->update();
    }

    public function setTitle(string $title):void{
     $this->title = $title;
    }

    public function update():void{
     $this->level->addParticle($this);
    }

}
