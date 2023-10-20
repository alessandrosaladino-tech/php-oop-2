<?php
class category
{
    public $animal_category;

    public function __construct($_animal_category)
    {
        $this->animal_category = $_animal_category;
    }

    public function getImage()
    {
        if($this->animal_category === "Cani"){
            return "Cani" .  '<img style="width: 40px;" src="./img/dog.png" alt="">';
        }elseif($this->animal_category === "Gatti"){
            return "Gatti" . '<img style="width: 40px;" src="./img/cat.png" alt="">';
        }
    }
}

// non funziona , ricontrollare