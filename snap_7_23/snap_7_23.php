<?php

/*Write a class with two state variables, accessors, mutators, and a method that does something.

extra credit
instaniate the class and call to a method.*/

class Snowboard {

	private $price;
	private $cost;

	//CONSTRUCTOR
	public function __construct(float $newPrice, float $newCost) {
			$this->setPrice($newPrice);
			$this->setCost($newCost);
			}

	//ACCESSORS and MUTATORS
	public function getPrice() : float {
		return($this->price);
	}

	public function getCost() : float {
		return($this->cost);
	}
	public function setPrice(float $newPrice) : void {
		$this->price = $newPrice;
	}
	public function setCost(float $newCost) : void {
		$this->price = $newCost;
	}
	//This calculates the profit

	public function profit() : void {
		echo ($this->price - $this->cost);
	}

}

$customBoard = new Snowboard(1000,400);
$customBoard->profit();







