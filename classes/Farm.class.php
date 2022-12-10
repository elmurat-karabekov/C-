<?php

class Farm
{
    private array $animals = [];
    private array $products = [];
    private static $nextId = 0;


    public function addLiveStock(Animal $animal)
    {
        $animal->id = self::$nextId;
        self::$nextId++;
        array_push($this->animals, $animal);
    }

    public function countAnimals()
    {
        $arr = [];
        foreach ($this->animals as $animal){
            $class = get_class($animal);
            if (!array_key_exists($class, $arr)){
                $arr[$class] = 1;
            } else {
                $arr[$class]++;
            }
        }
        $str = "There are ";
        foreach ($arr as $animal => $quantity){
            $str .= $quantity. ' ' . $animal. 's, ';
        }
        echo $str . 'in the farm.';
    }

    public function collectProduct()
    {
        foreach ($this->animals as $animal){
            if (!array_key_exists($animal->getProduct(), $this->products))
            {
                $this->products[$animal->getProduct()] = $animal->produce();
            } else {
                $this->products[$animal->getProduct()] += $animal->produce();
            }
        }
    }

    public function displayQuantity()
    {
        echo "The farm has produced:" . PHP_EOL;
        foreach ($this->products as $prodName => $quantity)
        {
            echo "\t" . $quantity . ' ' .  $prodName . PHP_EOL;
        }
    }

}
?>