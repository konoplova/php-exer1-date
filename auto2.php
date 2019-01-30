<?php

class Auto
{
	private $brand = [];
	private $year = [];
	private $model = [];
	private $vinСode = [];

	public function setBrand($brand)
	{
		$this->brand = $brand;
	}
	public function getBrand()
	{
		return $this->brand; 
	}
	
	public function setYear($year)
	{
		$this->year = $year;
	}
	public function getYear()
	{
		return $this->year; 
	}

	public function setModel($model)
	{
		$this->model = $model;
	}
	public function getModel()
	{
		return $this->model; 
	}
	public function setVinCode($vinСode)
	{
		$this->vinCode = $vinCode;
	}
	public function getVinCode()
	{
		return $this->vinCode; 
	}
}


class Car extends Auto
{
	public $equipment = [];
}


class Truck extends Auto
{
	public $capacity = [];
}


class Catalog
{
	private $auto = [];

	public function addAuto(Auto $auto)
	{
		$this->auto[] = $auto->getAuto();
	}
}


$auto = new Auto();
$auto->setBrand('Toyota');
$auto->setYear('2018');
$auto->setModel('outlander');
$auto->setVinCode('32425FTR');


$car = new Car;
$car->setBrand('Honda');
$car->setYear('2011');
$car->setModel('outlander');
$car->setVinCode('1111JTR');
$car->equipment = 'radio';


$truck = new Truck;
$truck->setBrand('ZIL');
$truck->setYear('1986');
$truck->setModel('2d');
$truck->setVinCode('142588790000');
$truck->capacity = '124T';

$catalog = new Catalog;
$catalog->addAuto($auto);
$catalog->addAuto($car);
$catalog->addAuto($truck);

print_r($catalog)


