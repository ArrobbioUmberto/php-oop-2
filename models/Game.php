<?php
require_once __DIR__ . "/Product.php";

class Game extends Product
{

    public string $material;
    public string $form;


    function __construct($_material, $_form, $_price, $_quantity, $_category, $_title, $_description, $_img)
    {
        parent::__construct($_quantity, $_category, $_title, $_price, $_description, $_img);
        $this->material = $_material;
        $this->form = $_form;
    }
}
