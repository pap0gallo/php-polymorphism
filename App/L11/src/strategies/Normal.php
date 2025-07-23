<?php

namespace App\L11\src\strategies;

require __DIR__ . '/../../../../vendor/autoload.php';

class Normal
{
    // BEGIN (write your solution here)
    private $field;

    public function __construct()
    {
        $this->field = [[null, null, null], [null, null, null], [null, null, null]];
    }

    private function checker()
    {
        for ($row = 2; $row >= 0; $row--) {
            for ($col = 0; $col <= 2; $col++) {
                if (is_null($this->field[$row][$col])) {
                    return [$row, $col];
                }
            }
        }
        return false;
    }


    public function setCrossByUser($row, $col)
    {
        if (is_null($this->field[$row - 1][$col - 1])) {
            $this->field[$row - 1][$col - 1] = 'x';
            return $this->checkWinner('x');
        } else {
            return false;
        }
    }

    public function setOByAI()
    {
        $cell = $this->checker();

        if (is_array($cell)) {
            [$row, $col] = $cell;
            $this->field[$row][$col] = 'o';
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
        for ($i = 2; $i > -1; $i--) {
            if (
                $this->field[2][$i] === $symbol &&
                $this->field[1][$i] === $symbol &&
                $this->field[0][$i] === $symbol
            ) {
                return true;
            }
        }

        // Проверка диагоналей
        if (
            $this->field[2][2] === $symbol &&
            $this->field[1][1] === $symbol &&
            $this->field[0][0] === $symbol
        ) {
            return true;
        }

        if (
            $this->field[2][0] === $symbol &&
            $this->field[1][1] === $symbol &&
            $this->field[0][2] === $symbol
        ) {
            return true;
        }

        return false;
    }
    // END
}
