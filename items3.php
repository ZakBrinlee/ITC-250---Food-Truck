<?php
//items4.php
$items [] = new Item("Taco","Mystery meat taco with mighty spicy salsa! - $4.95", 4.95);
$items [] = new Item("Burrito","Bean Burrito! - $3.95", 3.95);
$items [] = new Item("Enchilada","Extraordinary enchilada! - 5.95", 5.95);

class Item
{
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Quantity = 0;
    const TAX = 0.095;
    
    public function __construct($Name,$Description,$Price)
    {
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
        
    }#end Item constructor
}#end Item class