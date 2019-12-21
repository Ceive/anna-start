<?php

class Car{
	
	/**
	 * Скорось машины в Км/Ч
	 * @var integer
	 */
	public $speed;
	public $type;
	
	public function __construct($type, $speed){
		$this->speed = $speed;
		$this->type = $type;
	}
	
	public function go($hours){
		$dimension = $this->speed * $hours;
		echo 'Я еду '. $this->speed . "км/ч, проехал {$dimension} километров\r\n";
		return $dimension;
		
	}
}

/**
 * Class Road
 * Дорога по которой едут машины
 */
class Road{
	
	public $cars = [];
	
	public function addCar($car){
		$this->cars[] = $car;
		
		echo "На дорогу был добавлен автомобиль {$car->type}, его скорость {$car->speed} км/ч\r\n";
		
	}
}
$car_1 = new Car('спорткар', 160);
$car_1->go(1);
$car_2 = new Car('пенсиомобиль', 20);
$car_1->go(3);
$car_3 = new Car('картинг', 80);
$car_1->go(10);

$road = new Road();

$road->addCar($car_1);
