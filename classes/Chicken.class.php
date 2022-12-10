<?php

class Chicken extends Animal
{
    private $product = 'eggs';
    private $quantity;

    public function produce()
    {
        $this->quantity = rand(0, 1);
        return $this->quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

}

?>