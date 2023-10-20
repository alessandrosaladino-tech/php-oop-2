<?php

class toy extends Product
{
    public $material;

    public function __construct($_name, $_price,$animal_type, $_material)
    {
        parent::__construct($_name, $_price, $animal_type);
        $this->material = $_material;
    }

    public function getInfo()
    {
        return $this->material;
    }
}
