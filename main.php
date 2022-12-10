<?php 
include_once 'includes/autoloader.inc.php';

$farm = new Farm();

// Добавили на ферму 20 кур и 10 коров
for ($count = 0; $count < 10; $count++){
    $farm->addLiveStock(new Cow());
}

for ($count = 0; $count < 20; $count++){
    $farm->addLiveStock(new Chicken());
}

// Информация о количестве животных на ферме 

$farm->countAnimals();

echo PHP_EOL;

// Производим сбор продукции 7 дней  
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();

$farm->displayQuantity();

echo PHP_EOL. PHP_EOL;

// Добавили на ферму ещё 5 кур и 1 корову
$farm->addLiveStock(new Cow());

for ($count = 0; $count < 5; $count++){
    $farm->addLiveStock(new Chicken());
}

// Информация о количестве животных на ферме 
$farm->countAnimals();

echo PHP_EOL;

// Производим сбор продукции 7 дней  
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();
$farm->collectProduct();

$farm->displayQuantity();

?>