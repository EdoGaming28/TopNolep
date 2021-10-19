<?php

namespace TopNolep\EdoGaming;

use pocketmine\scheduler\Task;

class UpdateTask extends Task{

    public function __construct(Main $pl){
     $this->pl = $pl;
    }

    public function onRun($tick){
     $lb = $this->pl->getLeaderBoard();
     $list = $this->pl->getParticles();
     foreach($list as $particle){
      $particle->setText($lb);
     }
    }

}
