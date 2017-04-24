<?php
Class ShoppingCart implements iterator {
	protected $items = array();
	
	function __construct(){
		$this->items=array();
	}
	
	function addToCart($isbn,$quantity){
		$this->items[$isbn] = $quantity;
	}
	
	function current() {
		$var = current ($this->items);
		return $var;
	}
	
	function key(){
		$var = key($this->items);
		return $var;
	}
	
	function next(){
		$var = next($this->items);
		return $var;
	}
	
	function rewind(){
		reset($this->items);
	}
	
	function valid(){
		$key = key($this->items);
		$var = ($key !== NULL && $key !== FALSE);
		return $var;
	}
}
	