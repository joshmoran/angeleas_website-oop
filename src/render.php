<?php

class render
{
    public $variable;

    public function __construct($variable)
    {
        $this->variable = $variable;
    }

    public function showSome()
    {
        echo '<h2>' . $this->variable . '</h2>';
    }
}
