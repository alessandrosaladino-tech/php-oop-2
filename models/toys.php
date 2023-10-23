<?php

class toy extends Product
{

    use Info;

    public $material;
    public $color;

    public function __construct($_name, $_price, $animal_type, $_material, $_color)
    {
        parent::__construct($_name, $_price, $animal_type);
        $this->material = $_material;
        $this->color = $_color;
    }

}
