<?php
echo "<h1>Выводим стоимость товаров</h1>";
class Car {
  public $model;
  public $fuel;
  public $gearbox;
  public $color;
  public $price;
  public $discount;
  public $insurance = false;
  public function addInsurance() {
    $this->insurance = true;
  }
  public function getPrice() {
    if ($this->discount) {
      return round($this->price - ($this->price * $this->discount / 100));
    }
    else {
      return $this->price;
    }
  }
}

$toyota = new Car();
$toyota->model = 'Toyota Camry';
$toyota->fuel = 'бензин';
$toyota->gearbox = 'автоматическая';
$toyota->color = 'черная';
$toyota->price = 1500000;
$toyota->discount = 10;
$toyota->addInsurance();
echo "Автомобиль".$toyota->model." стоит ".$toyota->getPrice()." рублей<br>";

$bmw = new Car();
$bmw->model = 'BMW X3';
$bmw->fuel = 'дизель';
$bmw->gearbox = 'ручная';
$bmw->color = 'красная';
$bmw->price = 2000000;
$bmw->discount = 0;
$bmw->addInsurance();
echo "Автомобиль".$bmw->model." стоит ".$bmw->getPrice()." рублей<br>";

class Tv {
  public $brand;
  public $screen;
  public $size;
  public $color;
  public $price;
  public $shipping = false;
  public function addShipping() {
    $this->shipping = true;
  }
  public function getPrice() {
    if ($this->shipping) {
      return ($this->price + $this->shipping=500);
    }
    else {
      return $this->price;
      }
    }
}

$sony = new Tv();
$sony->brand = 'Sony';
$sony->screen = 'ЖК';
$sony->size = 42;
$sony->color = 'Серебристый';
$sony->price = 30000;
$sony->addShipping();
echo "Телевизор ".$sony->brand." стоит ".$sony->getPrice()." рублей<br>";

$samsung = new Tv();
$samsung->brand = 'Samsung';
$samsung->screen = 'Плазма';
$samsung->size = 40;
$samsung->color = 'Черный';
$samsung->price = 28000;
$samsung->addShipping();
echo "Телевизор ".$samsung->brand." стоит ".$samsung->getPrice()." рублей<br>";


class Pen {
  public $brand;
  public $material;
  public $ink_color;
  public $rechargeable;
  public $price;
  public $discount;
  public function getPrice() {
    if ($this->discount) {
      return round($this->price - ($this->price * $this->discount / 100));
    }
    else {
      return $this->price;
    }
  }
}

$bic = new Pen();
$bic->brand = "BIC";
$bic->material = "Пластик";
$bic->ink_color = "Синий";
$bic->rechargeable = "нет";
$bic->price = 50;
echo "Ручка ".$bic->brand." стоит ".$bic->getPrice()." рублей<br>";

$parker = new Pen();
$parker->brand = "Parker";
$parker->material = "Металл";
$parker->ink_color = "Черный";
$parker->rechargeable = "да";
$parker->price = 1000;
echo "Ручка ".$parker->brand." стоит ".$parker->getPrice()." рублей<br>";

class Duck {
  public $producer;
  public $weight;
  public $expires = false;
  public $price;
  public function addRecipe() {
  }
  public function getPrice() {
    if ($this->expires) {
      return $this->price=0;
    }
    else {
      return $this->price;
    }
}
}

$duck_old = new Duck();
$duck_old->producer = "Старые Васюки Ltd.";
$duck_old->weight = 2;
$duck_old->expires = true;
$duck_old->price = 400;
echo "Утка фабрики ".$duck_old->producer." стоит ".$duck_old->getPrice()." рублей<br>";

$duck_fresh = new Duck();
$duck_fresh->producer = "Новые Васюки Inc.";
$duck_fresh->weight = 3;
$duck_fresh->expires;
$duck_fresh->price = 600;
echo "Утка фабрики ".$duck_fresh->producer." стоит ".$duck_fresh->getPrice()." рублей<br>";

class Product {
  public $item;
  public $category;
  public $price;
  public $discount;
  public function getPrice() {
    if ($this->discount) {
      return round($this->price - ($this->price * $this->discount / 100));
    }
    else {
      return $this->price;
    }
  }
}

$drink = new Product();
$drink->item = "Coca-Cola";
$drink->category = "Напитки";
$drink->price = 50;
$drink->discount = 5;
echo "Товар ".$drink->item." из категории ".$drink->category." стоит ".$drink->getPrice()." рублей<br>";

$pizza = new Product();
$pizza->item = "Пицца \"Маргарита\"";
$pizza->category = "Закуски";
$pizza->price = 750;
$pizza->discount = 15;
echo "Товар ".$pizza->item." из категории ".$pizza->category." стоит ".$pizza->getPrice()." рублей<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Домашнее задание к лекции 3.1 «Классы и объекты»</title>
  <style>
    body {
    font-size: 16px;
    font-family: "Trebuchet MS", Helvetica, sans-serif;
    }
    h1, h2 {
    font-size: 22px;
    font-weight: 700;
    color: blue;
    }
    article {
    display: block;
    position: relative;
    margin: 0 auto;   
    width: 800px;
    }
    p {
    font-family: "Arial", Helvetica, sans-serif;
    font-size: 17px;      
    }

  </style>
</head>
<body>

<article>
<h2>Формулировки и пояснения</h2>
<p><strong>Инкапсуляция</strong> – это один из базовых принципов объектно-ориентированного программирования, который объединяет – подобно капсуле – в единое целое различные данные (свойства) и функции (методы) объекта.</p>
<p>Инкапсуляция как некий виртуальный механизм позволяет, с одной стороны, скрыть от пользователя часть или все свойства объекта и, с другой стороны, избавить его от опасений «сломать» нечаянно что-то в коде и от необходимости вникать в детали, отвлекающие от решения основной задачи.</p>
<p>В данном случае уместно сравнить программиста с автогонщиком: пилоту мощной машины не обязательно знать, как двигатель превращает бензин в лошадиные силы, главное – знать, как использовать этих «лошадей» для победы в гонке.</p>

<p><strong>Плюсы</strong> объектов заключены уже в самой структуре этого типа данных. С одной стороны, объект как копия класса несет в себе свойства и методы, «шаблонные» для других объектов. Однако, с другой стороны, каждый клонированный объект может приобретать «индивидуальные черты» без угрозы распространения их на прочие «штампованные» объекты. Достоинство этого должно быть особенно заметно, когда речь идет об обработке данных с большим количеством схожих товаров или, скажем, числом граждан, сгруппированных по разным категориям.</p>
<p>Возможность скрытия свойств объекта от пользователя обеспечивает сохранность данных от случайных ошибок или злого умысла. А сам принцип «окукливания» данных и свойств объекта в некую капсулу позволяет работать с ним как с переменной, содержащей в себе разнообразную информацию и команды для исполнения кода.</p>
<p>Применение объектов в программировании позволяет вести работу над одним проектом разным людям без опасения «сломать» весь код – даже если ошибка будет допущена при работе с одним объектом, другие объекты и уж тем более шаблон-класс пострадать не должны.</p>
<p>Наконец, еще немаловажное достоинство объектов – это значительное сокращение кода, что делает документ более читабельным и компактным.</p>

<p><strong>Минусы</strong> у объектов тоже есть, и главный из них для большинства начинающих программистов, – сложность восприятия принципов ООП вообще и объектов, в частности.</p>
<p>Собственный синтаксис объектов также может ввести в заблуждение даже опытных пользователей PHP, не обращавшихся ранее к ООП.</p>
<p>И, судя по отзывам в интернете, более сложная структура объектов (по сравнению с процедурным программированием) требует большей нагрузки на сервер.</p>
</article>


</body>
</html>