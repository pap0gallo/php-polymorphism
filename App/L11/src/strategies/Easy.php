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

    private function checker()
    {
        foreach ($this->field as $rowIndex => $row) {
            $colIndex = array_search(null, $row);
            if (is_int($colIndex)) {
                return [$rowIndex, $colIndex];
            }
        }
        return false;
    }
    public function setCrossByUser($x, $y)
    {
        if (is_null($this->field[$x - 1][$y - 1])) {
            $this->field[$x - 1][$y - 1] = 'x';
            return $this->checkWinner('x');
        } else {
            return false;
        }
    }

    public function setOByAI()
    {
        $cell = $this->checker();

        if (is_array($cell)) {
            [$x, $y] = $cell;
            $this->field[$x][$y] = 'o';
            return $this->checkWinner('o');
        }

        return false;
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
