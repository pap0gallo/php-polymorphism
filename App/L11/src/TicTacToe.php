<?php

namespace App\L11\src;

use App\L11\src\strategies\Easy;
use App\L11\src\strategies\Normal;

require __DIR__ . '/../../../vendor/autoload.php';
class TicTacToe
{
    // BEGIN (write your solution here)
    private $strategy;
    public function __construct($strategy = 'easy')
    {
        switch ($strategy) {
            case 'easy':
                $this->strategy = new Easy();
                break;
            case 'normal':
                $this->strategy = new Normal();
                break;
        }
    }
    public function go($row = null, $col = null)
    {
        if (is_int($row) && is_int($col)) {
            return $this->strategy->setCrossByUser($row, $col);
        } elseif (is_null($row) && is_null($col)) {
            return $this->strategy->setOByAI();
        }
    }
    // END
}
