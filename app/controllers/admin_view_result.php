<?php

/**



*/
class admin_view_result extends controller
{

	public function __construct(){
	$this->middleware('admin')->mustbe_loggedin();

	}



	
	public function index()
	{

$available_years = $this->available_weekandyear()['available_years'];
$available_weeks = $this->available_weekandyear()['available_weeks'];


		
			$this->view('admin/view_result' , ['available_weeks'=> $available_weeks, 
												'available_years'=> $available_years ]); 


	}





}























?>