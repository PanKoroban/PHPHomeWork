<?php
abstract class Goods {
    abstract function resultSum();
    function income(){
        return $this->resultSum() - $this->cost_price * $this->count;
    }
}

class Thing_goods extends Goods{
    public $name;
    public $count;
    public $price;
    public $cost_price;

    function __construct($name, $count, $cost_price, $price){
        $this->name=$name;
        $this->count=$count;
        $this->cost_price=$cost_price;
        $this->price=$price;
    }
    function resultSum():int{
        return $this->count * $this->price;
    }
    function getPrice(){
        return $this->price;
    }

}

class Weight_goods extends Goods{
    public $name;
    public $count;
    public $price;
    public $cost_price;

    function __construct($name, $count, $cost_price, $price){
        $this->name=$name;
        $this->count=(float)$count;
        $this->cost_price=$cost_price;
        $this->price=$price;
    }
    function resultSum():float{
        return $this->count * $this->price;
    }
}

class Digital_goods extends Goods{
    public $name;
    public $count;
    public $price;
    public $cost_price;

    function __construct($name, $count, $cost_price, $Thing_goods){
        $this->name=$name;
        $this->count=$count;
        $this->cost_price=$cost_price;
        $this->price=$Thing_goods->getPrice()/2;
    }
    function resultSum():int{
        return $this->count * $this->price;
    }
}

$Good = new Thing_goods('Good', 10, 5, 20);
echo "Сумма заказа штучного товара = {$Good->resultSum()}<br>";
echo "Прибыль с заказа штучного товара = {$Good->income()}<br>";
$Weight_goods = new Weight_goods('Weight', 12.3, 3, 15);
echo "Сумма заказа штучного товара = {$Weight_goods->resultSum()}<br>";
echo "Прибыль с заказа штучного товара = {$Weight_goods->income()}<br>";
$Digital_goods = new Digital_goods('Digital', 10, 5, $Good);
echo "Сумма заказа штучного товара = {$Digital_goods->resultSum()}<br>";
echo "Прибыль с заказа штучного товара = {$Digital_goods->income()}<br>";