<?php

class food extends Product
{

    use Info;

    public $weight;
    public $material;
    public $color;

    public function __construct($_name, $_price,$animal_type, $_weight,$_material, $_color)
    {
        parent::__construct($_name, $_price, $animal_type);
        $this->weight = $_weight;
        $this->material = $_material;
        $this->color = $_color;
    }

    public function getInfo()
    {
        return $this->weight . "Kg";
    }
}