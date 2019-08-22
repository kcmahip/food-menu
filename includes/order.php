<?php 

include_once('item.php');

class Order{
	private $user;
	private $items;

	function __construct() {
		// Default Constructor
	}

	function getUser() {
		return $this->user;
	}

	function getItems() {
		return $this->items;
	}

	function setUser($user) {
		$this->user = $user;
	}

	function setItems($items = array()) {
		$this->items = $items;
	}

	function addItem(Item $item) {
		$this->items[] = $item;
	}

	function getTotal() {
		$total = 0;
		foreach ($this->items as $item) {
			$total += $item->getTotal();
		}
		return $total;
	}

	function jsonify() {
		$jsonItems = array();
		foreach ($this->items as $item) {
			$jsonItems[$item->getId()] = array(
				'name' => $item->getName(),
				'price' => $item->getPrice(),
				'quantity' => $item->getQuantity()
			);
		}
		$temp = $this;
		$temp->items = $jsonItems;
		return get_object_vars($temp);
	}
}

?>