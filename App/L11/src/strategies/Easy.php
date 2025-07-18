<?php

namespace App\L11\src\strategies;

require __DIR__ . '/../../../../vendor/autoload.php';

class Easy
{
    // BEGIN (write your solution here)
    private $field;

    public function __construct()
    {
        $this->field = [[null, null, null], [null, null, null], [null, null, null]];
    }

    private function horizontalChecker()
    {
        foreach ($this->field as $rowIndex => $row) {
            $colIndex = array_search(null, $row);
            if (is_int($colIndex)) {
                return [$rowIndex, $colIndex];
            } else {
                return false;
            }
        }
    }

    private function verticalChecker()
    {
        for ($col = 0; $col < 3; $col++) {
            for ($row = 0; $row < 3; $row++) {
                if(is_null($this->field[$row][$col])) {
                    return [$row, $col];
                }
            }
        }
        return false;
    }
    public function setCrossByUser($x, $y)
    {
        if(is_null($this->field[$x - 1][$y - 1])) {
            $this->field[$x - 1][$y - 1] = 'x';
            return $this->checkWinner('x');
        } else {
            return false; // ход невозможен
        }
    }

    public function setOByAI()
    {
        $horizontalCheck = $this->horizontalChecker();
        $verticalCheck = $this->verticalChecker();

        if (is_array($horizontalCheck)) {
            [$x, $y] = $horizontalCheck;
        } elseif (is_array($verticalCheck)) {
            [$x, $y] = $verticalCheck;
        } else {
            return false;
        }
        $this->field[$x][$y] = 'o';
        return $this->checkWinner('o');
    }
    private function checkWinner($symbol)
    {
        // Проверка строк
        foreach ($this->field as $row) {
            if ($row[0] === $symbol && $row[1] === $symbol && $row[2] === $symbol) {
                return true;
            }
        }

        // Проверка столбцов
        for ($i = 0; $i < 3; $i++) {
            if (
                $this->field[0][$i] === $symbol &&
                $this->field[1][$i] === $symbol &&
                $this->field[2][$i] === $symbol
            ) {
                return true;
            }
        }

        // Проверка диагоналей
        if (
            $this->field[0][0] === $symbol &&
            $this->field[1][1] === $symbol &&
            $this->field[2][2] === $symbol
        ) {
            return true;
        }

        if (
            $this->field[0][2] === $symbol &&
            $this->field[1][1] === $symbol &&
            $this->field[2][0] === $symbol
        ) {
            return true;
        }

        return false;
    }
    // END
}
