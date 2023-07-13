<?php

namespace App\Strategies;

use App\Models\Good;

class GoodStatusMove
{
  public function execute(GoodStatusMoveInterface $strategy, Good $good): void 
  {
    $strategy->execute($good);
  }
}