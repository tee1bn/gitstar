<?php



class admin_media extends controller{


public function __construct(){



	}
	


public function index($page=''){


				$this->view('admin/media', ['page'=> $page]);  //note this is a path to the view

	}
	






}



