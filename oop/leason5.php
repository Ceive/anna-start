<?php
/**
 *
 * Машина
 *      Скорость
 *      Производитель. Марка. Год.
 *      Уровень топливного бака
 *      Макс. Уровень топливного бака
 *      Багаж
 *
 *
 * Дорога
 *      Интервал пути в минутах
 *      Машины
 *      Задачи для машин
 *          Забрать человека -20 минут
 *          Заправиться -5 минут
 *          
 *      Объекты
 *          Заправочные станции
 *          Простые объекты
 *          Здания
 *          КПП
 */
/**
 * @Author: Alexey Kutuzov <lexus27.khv@gmail.com>
 * Class Car
 */
class Car{
	
	public $fabric;
	
	public $model;
	
	public $speed;
	
	public function __construct($fabric, $model, $speed=10){
		$this->fabric = $fabric;
		$this->model = $model;
		$this->speed = $speed;
	}
	
	
	
}

/**
 * @Author: Alexey Kutuzov <lexus27.khv@gmail.com>
 * Class Road
 */
class Road{
	
	/** @var Car[]  */
	protected $cars = [];
	
	protected $carsPositions = [];
	
	/** @var int в минутах */
	protected $stepTime;
	
	public function __construct($stepTime = 10){
		$this->stepTime = $stepTime;
	}
	
	public function searchCar(Car $car){
		
	}
	
	public function addCar(Car $car){
		$this->cars[] = $car;
		$this->carsPositions[] = 0;
	}
	
	public function goStep(){
		$stepHours = $this->stepTime * 60;
		
		echo "Машины поехали: \r\n";
		
		foreach($this->cars as $i => $value){
			$speed = $value->speed;
			$ride = $stepHours * $speed;//Проехал
			
			
			
			$position = $this->carsPositions[$i];
			$position = $position + $ride;
			$this->carsPositions[$i] = $position;
			
			echo "\t{$value->fabric} {$value->model} проехал {$ride} километра,\r\n позиция: {$position}\r\n\r\n";
		}
		
		echo "Приехали";
	}
	
	
}

$car1 = new Car('BMW', 'X5', 280);
$car2 = new Car('Nissan', 'AD', 60);
$car3 = new Car('Toyota', 'Crown', 285);
$car4 = new Car('Mitsubishi', 'Galant', 200);
$car5 = new Car('Toyota', 'Corolla', 170);

$road = new Road();

$road->addCar($car1);
$road->addCar($car2);
$road->addCar($car3);
$road->addCar($car4);
$road->addCar($car5);

