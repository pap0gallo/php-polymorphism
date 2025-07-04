<?php

namespace App\L11\src\testFunc;

require __DIR__ . '/../../../vendor/autoload.php';

use App\L11\src\TicTacToe;

$game = new TicTacToe('normal');

$game->go(2,2);

$game->go();

$game->go(1, 2);

$game->go();

var_dump( $game->go(3, 2));