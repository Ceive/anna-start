<?php
 

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

class Road{
	
	
	protected $cars = [];
	
	
	public function addCar(Car $car){
		$this->cars[] = $car;
	}
	
}


$car1 = new Car('BMW', 'X5', 280);
$car2 = new Car('Nissan', 'AD', 60);
$car3 = new Car('Toyota', 'Crown', 285);
