<?php

class kennel extends Product
{
    public $dimensions;

    public function __construct($_name, $_price, $animal_type, $_dimensions)
    {
        parent::__construct($_name, $_price, $animal_type);
        $this->dimensions = $_dimensions;
    }

    public function getInfo()
    {
        return $this->dimensions . "cm";
    }
}