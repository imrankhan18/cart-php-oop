<?php

namespace App;

class product
{
	public $id;
	public $name;
	public $price;
	public $image;
	public function __construct($id, $name, $image, $price)
	{
		$this->id = $id;
		$this->name = $name;
		$this->image = $image;
		$this->price = $price;
	}
}
