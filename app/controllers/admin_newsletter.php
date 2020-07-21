<?php



class admin_newsletter extends controller{

public function __construct(){


	}
	
public function index(){

 $newsletter = $this->model('newsletter')->orderBy('created_at', 'desc')->get();

	$this->view('admin/newsletter' , ['newsletter' => $newsletter]); 
}






}



