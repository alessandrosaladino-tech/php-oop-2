<?php


class Product 
{
    public $name;
    public $price;
    public $animal_type;

    public function __construct($_name, $_price, $_animal_type)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->animal_type = $_animal_type;
    }


}