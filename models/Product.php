<?php

//per prima cosa creo la classe principale di prodotti

class Product
{

    public int $quantity;
    public string $category;
    public string $title;
    public string $description;
    public float $price;
    public string $img;





    function __construct($_quantity, $_category, $_title, $_price, $_description, $_img)
    {
        $this->quantity = $_quantity;
        $this->category = $_category;
        $this->title = $_title;
        $this->price = $_price;
        $this->description = $_description;
        $this->img = $_img;
    }
    // public function setQuantity($value){
    //     if($value < 0){
    //         return "Prodotto non disponibile";
    //     } else if (is_null($value) || is_nan($value)){
    //         return "Nessun numero valido inserito";
    //     }
    //     return $this->quantity = $value;

    // }
}
