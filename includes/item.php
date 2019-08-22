<?php

class Item{
	private $id;
	private $name;
	private $quantity;
	private $price;

	function __construct() {
		// Default Constructor
	}

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}

	function getQuantity() {
		return $this->quantity;
	}

	function getPrice() {
		return $this->price;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setName($name) {
		$this->name = $name;
	}

	function setQuantity($quantity = 0) {
		$this->quantity = $quantity;
	}
	
	function setPrice($price = 0) {
		$this->price = $price;
	}

	function getTotal() {
		return $this->price * $this->quantity;
	}
}

?>