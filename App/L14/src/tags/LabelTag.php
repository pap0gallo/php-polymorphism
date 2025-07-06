<?php

namespace App\L14\src\tags;

require __DIR__ . '/../../../../vendor/autoload.php';

// BEGIN (write your solution here)
class LabelTag implements TagInterface
{
    private $label;
    private $initTag;

    public function __construct(string $label, $tag)
    {
        $this->label = $label;
        $this->initTag = $tag;
    }

    public function render()
    {
        return "<label>{$this->label}{$this->initTag->render()}</label>";
    }

    public function __toString()
    {
        return $this->render();
    }
}
// END
