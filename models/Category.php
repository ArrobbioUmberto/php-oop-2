<?php

class Category
{
    public string $breed;
    public string $hair_lenght;
    public float $weight;
    public float $height;



    function __construct($_breed)
    {
        $this->breed = $_breed;
    }
    public function setBreed($newValue)
    {
        $this->breed = $newValue;
    }
}
