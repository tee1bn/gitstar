<?php

/**
* 
*/
class Cart 
{
	
	public static $instance = false;

	public function __construct()
	{
		$this->$instance = true;
	}

	



	public static function getInstance()
	{
		if (self::$instance === true) {
			
			return self;
		}else{

			return new self;
		}

	}

	public function basket(){

		return $_SESSION['cart'];
	}


	public function addItem($item)
	{


		if (array_key_exists( $item['item'] , $_SESSION['cart'] )) {
			
			$_SESSION['cart'][$item['item']]['qty']++;

		}else{

			$_SESSION['cart'][$item['item']] = $item;

			}
	}


	public function removeItem($item)
	{
		unset($_SESSION['cart']["$item"]);
	}



	public function empty()
	{
		unset($_SESSION['cart']);
	}

	public function update($content)
		{
			$_SESSION['cart'] = $content;
		}



	public function noOfItems(){

		return count($_SESSION['cart']);
	}	
}