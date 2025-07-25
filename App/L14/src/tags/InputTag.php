<?php

namespace App\L14\src\tags;

require __DIR__ . '/../../../../vendor/autoload.php';

class InputTag implements TagInterface
{
    private $type;
    private $value;

    public function __construct(string $type, $value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function render()
    {
        return "<input type=\"{$this->type}\" value=\"{$this->value}\">";
    }

    public function __toString()
    {
        return $this->render();
    }
}
