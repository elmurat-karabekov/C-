<?php

class  Cow extends Animal
{ 
    private $product = 'L of milk';
    private $quantity;

    public function produce()
    {
        $this->quantity = rand(8, 12);
        return $this->quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

}

?>