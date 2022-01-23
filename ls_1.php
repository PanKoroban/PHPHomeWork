<?php
// задание 1,2,3 Придумать класс описать его свойства и методы
class Book{
    public $name;
    public $price;

    function __construct ($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    function addToFavorit(){
        echo "{$this->name} добавлена в избранное";
    }

    function showInfo(){
        echo "Книга: {$this->name} <br>
            Цена: {$this->price}<br>";
    }
}

// задание 4 Придумать классы наследники
class StudyBook extends Book{
    public $forClass;

    function __construct($name, $price, $forClass){
        parent::__construct($name, $price);
        $this->forClass = $forClass;
    }

    function showInfo(){
        echo "Книга: {$this->name} <br>
            Цена: {$this->price} <br>
            Для какого класса: {$this->forClass}<br>";
    }
}

class FictionBook  extends Book{
    public $annotation;
    public $kind;

    function __construct($name, $price, $annotation, $kind){
        parent::__construct($name, $price);
        $this->annotation = $annotation;
        $this->kind = $kind;
    }

    function showInfo(){
        echo "Книга: {$this->name} <br>
            Цена: {$this->price} <br>
            Аннотация: {$this->annotation} <br>
            Жанр: {$this->kind}<br>";
    }
}

// проверяем
$book = new Book("Книга", 500);
$book->showInfo();
$algebra = new StudyBook("Алгебра", 700, 9);
$algebra->showInfo();
$fentasy = new FictionBook("Властелин колец", 900, "Книга про кольца и хоббитов", "Фентези");
$fentasy->showInfo();
$fentasy->addToFavorit();

// задание 5 
// выведет 1 2 3 4

// задание 6 
// выведет 1 1 2 2 - так как b - это отдельный класс

// задание 7
// тоже самое что и в 6-ом