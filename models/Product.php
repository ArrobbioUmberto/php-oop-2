<?php
require_once __DIR__ . "/Validator.php";
//per prima cosa creo la classe principale di prodotti

class Product
{
    use Validator;
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
        $this->setTitle($_title);
        $this->price = $_price;
        $this->description = $_description;
        $this->img = $_img;
    }
    function checkText()
    {
        if (strlen($this->description) < 5 || strlen($this->description) > 255) {
            throw new Exception("Il testo non rispetta la lunghezza consentita");
        }
        return $this->description;
    }
    public function setTitle(string $newValue)
    {
        if (!$this->testTitle($newValue)) {
            return;
        };
        $this->title = $newValue;
    }
}
