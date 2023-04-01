<?php
require_once __DIR__ . "/Product.php";
class Kennel extends Product
{
    public string $tissue;
    public string $shape;


    function __construct($_tissue, $_shape, $_quantity, $_title, $_price, $_description, $_img)
    {
        parent::__construct($_quantity, $_title, $_price, $_description, $_img);
        $this->tissue = $_tissue;
        $this->shape = $_shape;
    }
}
