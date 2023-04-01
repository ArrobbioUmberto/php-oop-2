<?php
require_once __DIR__ . "/Product.php";


class Food extends Product
{
    public $hasMeet = true;
    public string $consistency;

    function __construct($_hasMeet, $_consistency, $_quantity, $_category, $_title, $_price, $_description, $_img)
    {
        parent::__construct($_quantity, $_category, $_title, $_price, $_description, $_img);
        $this->hasMeet = $_hasMeet;
        $this->consistency = $_consistency;
    }
    //     function checkMeet()
    //     { if($hasMeet === false){
    // return "Non contiene carne"
    //     } else if{
    //         return "Contiene della carne"
    //     }
    //     }
}
