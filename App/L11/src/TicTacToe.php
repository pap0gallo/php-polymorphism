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
    public function go($x = null, $y = null)
    {
        if (is_int($x) && is_int($y)) {
            return $this->strategy->setCrossByUser($x, $y);
        } elseif (is_null($x) && is_null($y)) {
            return $this->strategy->setOByAI();
        }
    }
    // END
}
