<?php

/**



*/
class admin_dashboard extends controller
{

	public function __construct(){

	// $this->middleware('admin')->mustbe_loggedin();

	}
	
	public function index()
	{
		
		$this->view('admin/dashboard');

	}





}























?>