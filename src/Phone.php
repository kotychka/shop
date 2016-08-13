<?php

class Phone implements ProductInterface
{
	public $title = "";
	public $price = 0;
	

	public function __construct($title, $price)
	{
		$this->title = $title;
		$this->price = $price;
	}

	public function price()
	{
		if (isset($_SESSION["currency"]) && $_SESSION["currency"] == 0 ) {
			$this->price .= " $";
		} else {
			$this->price .= " р";
		}

		return $this->price;
	}
	
	public function title()
	{
		return $this->title;
	}

	public function img()
	{
		return "http://demo.opencart.com/image/cache/catalog/demo/apple_cinema_30-228x228.jpg";
	}

	public function call()
	{

	}
}