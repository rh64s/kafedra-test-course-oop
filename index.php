<?php


class Cat
{
    private $name;
    private $color;
    public $weight;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color =$color;
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '. Мой цвет - ' . $this->color;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setColor(string $color) {
        echo "Зачем ты... ";
        $this->color = $color;
    }
    public function getColor() {
        return $this->color;
    }
}

$barsik = new Cat('Барсик', 'рыжий');
$barsik->sayHello();
$snowy = new Cat("Снежок", "белый");
$snowy->sayHello();