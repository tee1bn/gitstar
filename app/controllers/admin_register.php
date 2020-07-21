<?php

/**



*/
class admin_register extends controller
{

	public function __construct(){
	$this->middleware('admin')->mustbe_loggedin();

	}
	
	public function index()
	{
		
		
		$this->view('admin/register'); 

	}





}























?>