<?php

class kennel extends Product
{
    use Info;


    public $dimensions;
    public $material;
    public $color;

    public function __construct($_name, $_price, $animal_type, $_dimensions, $_material, $_color)
    {
        parent::__construct($_name, $_price, $animal_type);
        $this->dimensions = $_dimensions;
        $this->material = $_material;
        $this->color = $_color;
    }

    public function getInfo()
    {
        return $this->dimensions . "cm";
    }
}
