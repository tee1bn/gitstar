<?php

/**



*/
class admin_add_journal extends controller
{

	public function __construct(){
	$this->middleware('admin')->mustbe_loggedin();

	}
	
	public function index()
	{
		$available_editors = $this->model('user')->where('type_id',2)->get();
		
		$this->view('admin/add_journal' , [

							'available_editors' => $available_editors
							
							]); 

	}





}























?>