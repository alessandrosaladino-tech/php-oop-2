<?php

class food extends Product
{
    public $weight;

    public function __construct($_name, $_price,$animal_type, $_weight)
    {
        parent::__construct($_name, $_price, $animal_type);
        $this->weight = $_weight;
    }

    public function getInfo()
    {
        return $this->weight . "Kg";
    }
}