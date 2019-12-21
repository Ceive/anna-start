<?php
/*
 * Разбор работы конструктора ( метода __construct)
 * Инкапсуляция - Взаимодействие по принципу "черный ящик"
 */
/**
 * Класс без конструктора
 * Контекст определения
 */
class Student{
	
	public $name;// имя
	
	public $age;// возраст
}
/////////// где то в своем коде ////контекст использования////////
$student1 = new Student();
$student1->name = 'Алексей';
if($student1->name){
	echo "Имя студента ".$student1->name. "\r\n";
}else{
	echo "Имя студента пустое\r\n";
}

$student2 = new Student();
$student2->name = 'Анна';
if($student2->name){
	echo "Имя студента ".$student2->name. "\r\n";
}else{
	echo "Имя студента пустое\r\n";
}


/**
 * Класс с конструктором
 * Контекст определения
 */
class House{
	
	public $slogan;
	
	public function __construct($slogan){
		$this->slogan = $slogan;
		if($slogan){
			echo "Приветствие дома ".$this->slogan. "\r\n";
		}else{
			echo "Приветствие дома отсутствует(дом не приветлив)\r\n";
		}
	}
}
/////////// где то в своем коде ////контекст использования////////
$house1 = new House('Добро пожаловать!');
$house2 = new House('Welcome!');


