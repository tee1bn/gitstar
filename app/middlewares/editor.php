<?php
@session_start();

// use Illuminate\Database\Eloquent\Model as Eloquent;

class editor extends controller
{
	

	public function __construct(){

	}
	
	


public function mustbe_loggedin(){

if(isset( $_SESSION["$this->website.__editor__id"] ) &&  $_SESSION["$this->website.__editor__type_id"] == 2){

	return true;
		}else{

	header("Location: $this->domain/editor_login");

		}

}





}


















?>