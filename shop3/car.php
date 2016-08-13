<?php

abstract class Vehile
{
	abstract public function run();
}

abstract class Car extends Vehile
{
	public function run() 
	{
		echo "Ruuuun on " .$this->circle() . " circle with ". $this->driver();
	}

	public function circle()
	{
		return 4;
	}

	protected function driver()
	{
		return "Anton";
	}
}

class Jeep extends Car
{
	public function power()
	{
		echo "Poweeer";
	}

	public function circle()
	{
		return 6;
	}

	protected function driver()
	{
		return "Leonid";
	}
}


$foo = new Jeep();

$foo->run();
echo "<br/>";
// $foo->power();