<?php

namespace App\L11\src\testFunc;

require __DIR__ . '/../../../vendor/autoload.php';

use App\L11\src\TicTacToe;

$game = new TicTacToe('normal');

$game->go();

$game->go(3, 2);

$game->go();

$game->go(2, 1);

$game->go();

$game->go(2, 3);

var_dump($game->go());